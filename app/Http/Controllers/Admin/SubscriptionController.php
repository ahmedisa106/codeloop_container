<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use App\Mail\SendEmailToCompany;
use App\Models\Company;
use App\Models\CompanyPackage;
use App\Models\Package;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SubscriptionController extends Controller
{
    use ResponseTrait;

    protected $data = [

        'page_title' => 'الإشتراكات',
        'create' => 'إضافة إشتراك',
        'edit' => 'تعديل إشتراك',
    ];

    public function index()
    {
        return view('admin.pages.subscriptions.index', ['data' => $this->data]);
    }

    public function data(Request $request)
    {
        $subscriptions = CompanyPackage::latest()->get()->unique('company_id');
        $model = 'subscriptions';
        return DataTables::of($subscriptions)
            ->filter(function ($instance) use ($request) {

                if ($request->has('status') && $request->status != '') {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return Str::contains($row['status'], $request->get('status'));
                    });
                }
            })
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('company_id', function ($raw) {
                return '<a  class="show_modal text-color" href="' . route('companies.history', $raw->company_id) . '">' . $raw->company->name . '</a>';
            })
            ->addColumn('package_id', function ($raw) {
                return $raw->package->title;
            })
            ->addColumn('status', function ($raw) {

                switch ($raw->status) {
                    case 'pending':
                        $status = 'pending';
                        break;
                    case 'subscribed':
                        $status = 'subscribed';
                        break;
                    default:
                        $status = 'finished';
                }

                return $status;
            })
            ->rawColumns(['company_id' => 'company_id'])
            ->make(true);

    }//end of data function

    public function create()
    {
        $companies = Company::with('package')->get();
        $packages = Package::where('status','active')->get(['id', 'title']);

        return view('admin.pages.subscriptions.create', ['data' => $this->data], compact('companies', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(SubscriptionRequest $request)
    {
        $data = $request->validated();
        // check if company has already subscribed
        $subscription = CompanyPackage::where('company_id', $data['company_id'])->latest('id')->first();
        $company = Company::find($data['company_id']);

        if (!empty($subscription) && $subscription->status == 'subscribed') {
            return response()->json(['error' => 'المؤسسة بالفعل مشتركه في باقة'], 401);
        } elseif (!empty($subscription) && $subscription->status == 'pending') {
            return response()->json(['error' => 'المؤسسة بالفعل مشتركه في باقة ومنتظره التفعيل'], 401);
        }

        $company->history()->create([
            'package_id' => $data['package_id'],
            'status' => $data['status'],
            'note' => 'تم الإشتراك في باقة جديده',
            'at' => now()->toDateString(),
        ]);

        if($data['status'] !== 'pending'){
            $company->update([
                'status'=>'active'
            ]);

            Transaction::create([
                'body'=>'إشتراك جديد',
                'total'=>$data['price_after_discount'],
            ]);
        }

        CompanyPackage::create($data);

        return $this->setAddedSuccess();
    }


    public function changePending(Request $request)
    {

        $package = Package::find($request->package_id)->period;
        $subscription = CompanyPackage::find($request->id);
        $company = Company::find($subscription->company_id);

        $new_data = now()->addMonths($package)->toDateString();

        $subscription->update(
            [
                'package_finish_at' => $new_data,
                'status' => 'subscribed',
            ]
        );

        $company->history()->create([
            'package_id' => $subscription->package_id,
            'status' => 'subscribed',
            'note' => 'تم تفعيل الباقة',
            'at' => now()->toDateString(),
        ]);

        $company->update([
            'status'=>'active'
        ]);
        Transaction::create([
            'body'=>'إشتراك جديد',
            'total'=>$subscription->price_after_discount,
        ]);

        return $this->setUpdatedSuccess();

    }//end of changePending function

    public function companyResubscribed($id)
    {
        $subscription = CompanyPackage::find($id);
        $packages = Package::where('status','active')->get(['id', 'title']);
        $this->data['create'] = 'تجديد الإشتراك';
        return view('admin.pages.subscriptions.resubscription', ['data' => $this->data], compact('packages', 'subscription'));
    }//end of companyResubscribed function

    public function subscribed(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'company_id' => 'required|exists:companies,id',
            'package_id' => 'required|exists:packages,id',
            'package_price' => 'required|min:0|gte:discount',
            'package_finish_at' => 'required|date',
            'discount' => 'required|lte:package_price|min:0',
            'price_after_discount' => 'required|lte:package_price|min:0',
        ], [], [

            'company_id' => 'المؤسسة',
            'package_id' => 'الباقة',
            'package_price' => 'سعر الباقة',
            'package_finish_at' => 'تاريخ إنتهاء الباقة',
            'discount' => 'الخصم',
            'price_after_discount' => 'سعر الباثه بعد الخصم',
        ]);
        if ($validator->fails()) {

            return $this->setError($validator->errors()->first());
        }
        $data = $validator->validated();

        $data['status'] = 'subscribed';
        $company = Company::find($data['company_id']);

        DB::beginTransaction();
        $company->history()->create([
            'package_id' => $data['package_id'],
            'status' => 'resubscribed',
            'note' => 'تم تجديد الإشتراك في الباقة',
            'at' => now()->toDateString(),
        ]);

        $company->update([
            'status'=>'active'
        ]);

        Transaction::create([
            'body'=>'تجديد إشتراك',
            'total'=>$data['price_after_discount'],
        ]);

        CompanyPackage::create($data);

        DB::commit();

        return $this->setAddedSuccess('تم  تجديد الإشتراك بنجاح');


    }//end of subscribed function
}
