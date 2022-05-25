<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Company;
use App\Models\CompanyPackage;
use App\Models\Package;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubscriptionController extends Controller
{
    use ResponseTrait;

    protected $data = [

        'page_title' => 'الإشتراكات',
        'create' => 'إضافه إشتراك',
        'edit' => 'تعديل إشتراك',
    ];

    public function index()
    {
        return view('admin.pages.subscriptions.index', ['data' => $this->data]);
    }

    public function data()
    {

        $subscriptions = CompanyPackage::get();
        $model = 'subscriptions';
        return DataTables::of($subscriptions)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('admin.includes.check_item', compact('raw'));
            })
            ->addColumn('company_id', function ($raw) {
                return $raw->company->name;
            })
            ->addColumn('package_id', function ($raw) {
                return $raw->package->title;
            })
            ->addColumn('status', function ($raw) {

                switch ($raw->status) {
                    case 'pending':
                        $status = 'منتظر التفعيل';
                        break;
                    case 'subscribed':
                        $status = 'مفعل';
                        break;
                    default:
                        $status = 'الإشتراك منتهي';
                }

                return $status;
            })
            ->make(true);

    }//end of data function

    public function create()
    {
        $companies = Company::with('package')->get();
        $packages = Package::get(['id', 'title']);

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
        $company = CompanyPackage::where('company_id', $data['company_id'])->latest('id')->first();

        if (!empty($company) && $company->status == 'subscribed') {
            return response()->json(['error' => 'المؤسسه بالفعل مشتركه في باقه'], 401);
        } elseif (!empty($company) && $company->status == 'pending') {
            return response()->json(['error' => 'المؤسسه بالفعل مشتركه في باقه ومنتظره التفعيل'], 401);
        }
        CompanyPackage::create($data);

        return $this->setAddedSuccess();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
