<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Package;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{

    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'المؤسسات',
        'create' => 'إضافه مؤسسه جديده',
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
        Company::create($data);

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
        $company->update($data);

        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
