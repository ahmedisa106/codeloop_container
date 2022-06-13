<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BranchController extends Controller
{
    use Upload, ResponseTrait;

    protected $data = [
        'page_title' => 'الفروع',
        'create' => 'إضافه فرع جديد',
        'edit' => 'تعديل فرع',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_branches'])->only('index', 'data');
        $this->middleware(['permission:create_branches'])->only('create', 'store');
        $this->middleware(['permission:update_branches'])->only('edit', 'update');
        $this->middleware(['permission:delete_branches'])->only('destroy', 'bulkDelete');
    }

    public function data()
    {

        $branches = Branch::where('company_id', auth()->user()->company->id)->get();

        $model = 'branches';
        return DataTables::of($branches)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('photo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);

    }//end of data function

    public function index()
    {
        return view('company.settings.branches.index', ['data' => $this->data]);
    }


    public function create()
    {
        return view('company.settings.branches.create', ['data' => $this->data]);
    }


    public function store(BranchRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'branches');
        }
        $data['company_id'] = auth()->user()->company->id;

        Branch::create($data);
        return $this->setAddedSuccess();
    }


    public function show($id)
    {
        //
    }


    public function edit(Branch $branch)
    {
        return view('company.settings.branches.edit', ['data' => $this->data], compact('branch'));
    }


    public function update(BranchRequest $request, Branch $branch)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->upload($request->photo, 'branches', true, $branch->photo);
        }
        $data['company_id'] = auth()->user()->company->id;

        $branch->update($data);
        return $this->setUpdatedSuccess();
    }


    public function destroy(Branch $branch)
    {
        $branch->delete();
        return $this->setDeletedSuccess();

    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        Branch::destroy($ids['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function

    public function pdf()
    {
//        $pdf = \PDF::loadView('layouts.app');
//        $pdf->stream('branches.pdf');
    }//end of pdf function
}
