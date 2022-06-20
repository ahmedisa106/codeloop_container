<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Models\CompanyClauses;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CompanyClauseController extends Controller
{

    use ResponseTrait;

    public function __construct()
    {
        $this->middleware(['permission:create_company-clauses'])->only(['create', 'store']);
        $this->middleware(['permission:read_company-clauses'])->only(['index', 'data']);
        $this->middleware(['permission:update_company-clauses'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_company-clauses'])->only(['destroy', 'bulkDelete']);
    }

    protected $data = [
        'page_title' => 'البنود',
        'create' => 'إضافه بند',
        'edit' => 'تعديل بند',
    ];

    public function data()
    {
        $clauses = auth()->user()->company->clauses;
        $model = 'company-clauses';
        return DataTables::of($clauses)
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->make(true);


    }//end of data function

    public function index()
    {
        return view('company.settings.clauses.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.settings.clauses.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'clause' => 'required|unique:company_clauses,clause',
        ], [], [
            'clause' => 'البند'
        ]);

        $data['company_id'] = auth()->user()->company->id;

        CompanyClauses::create($data);

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
    public function edit($id)
    {
        $clause = CompanyClauses::find($id);

        return view('company.settings.clauses.edit', ['data' => $this->data], compact('clause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clause = CompanyClauses::find($id);
        $data = $request->validate([
            'clause' => 'required|unique:company_clauses,clause,' . $id,
        ], [], [
            'clause' => 'البند'
        ]);

        $clause->update($data);

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

        CompanyClauses::destroy($id);
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);

        CompanyClauses::destroy($ids['items']);

        return $this->setDeletedSuccess();
    }//end of bulkDelete function
}
