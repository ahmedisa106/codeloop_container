<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    protected $data = [
        'page_title' => 'الموظفين',
        'create' => 'إضافه موظف',
        'edit' => 'تعديل موظف',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_employees'])->only(['index', 'data']);
        $this->middleware(['permission:create_employees'])->only(['create', 'store']);
        $this->middleware(['permission:update_employees'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_employees'])->only(['destroy', 'bulkDelete']);
    }//end of __construct function

    public function data()
    {
        $employees = auth()->user()->company->employees;
        $model = 'employees';
        return DataTables::of($employees)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('model', 'raw'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->make(true);


    }//end of data function

    public function index()
    {
        return view('company.employees.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.employees.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        //
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
    public function edit(Employee $employee)
    {
        return view('company.employees.edit', ['data' => $this->data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
