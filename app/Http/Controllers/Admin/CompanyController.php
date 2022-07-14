<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{

    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'المؤسسات',
        'create' => 'إضافة مؤسسه جديده',
        'edit' => 'تعديل مؤسسه',
    ];

    public function data()
    {
        $companies = Company::get();
        $model = 'companies';
        return DataTables::of($companies)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('logo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->addColumn('check_item', function ($raw) {
                return view('admin.includes.check_item', compact('raw'));
            })
            ->rawColumns(['logo' => 'logo', 'check_item' => 'check_item'])
            ->make(true);

    }//end of data function

    public function index()
    {
        return view('admin.pages.companies.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::get(['id', 'title']);
        return view('admin.pages.companies.create', compact('packages'), ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $this->upload($request->logo, 'companies');
        }
        $data['password'] = bcrypt($request->password);
        $data['status'] = $request->status ? 'active' : 'inactive';

        DB::beginTransaction();
        $company = Company::create($data);
        $company->attachRole('admin');
        DB::commit();
        return $this->setAddedSuccess();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $packages = Package::get(['id', 'title']);
        return view('admin.pages.companies.edit', ['data' => $this->data], compact('company', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = $this->upload($request->logo, 'companies', true, $company->logo);
        }
        $data['password'] = $request->password ? bcrypt($request->password) : $company->password;
        $data['status'] = $request->status ? 'active' : 'inactive';

        DB::beginTransaction();
        $company->update($data);
        DB::commit();
        return $this->setUpdatedSuccess();
    }


    public function history($id)
    {
        $company = Company::with('history')->find($id);
        return view('admin.pages.companies.history', compact('company'));
    }//end of  function

    public function historySearch(Request $request)
    {
        $company = Company::with('history')->when($request, function ($q) use ($request) {

            $q->with(['history' => function ($q) use ($request) {
                if ($request->status && $request->status != '') {
                    $q->where('status', $request['status']);
                }
                if ($request->date_from && $request->date_from != '' && $request->date_to && $request->date_to != '') {

                    $q->whereBetween('at', [$request['date_from'], $request['date_to']]);

                }
            }]);

        })->where('id', $request->company_id)->first();

        $view = View::make('admin.pages.companies.table', compact('company'))->render();
        return response()->json(['data' => $view], 200);
    }//end of historySearch function

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $items);
        Company::destroy($items['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
