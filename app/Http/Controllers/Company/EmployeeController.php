<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    use ResponseTrait, Upload;

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
            ->addColumn('job_type', function ($raw) {
                return $raw->job_type == 'messenger' ? 'مندوب' : 'سائق';
            })
            ->addColumn('photo', function ($raw) {
                return '<img src="' . $raw->image . '">';
            })
            ->rawColumns(['photo' => 'photo'])
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
        $branches = auth()->user()->company->branches;
        $categories = auth()->user()->categories;

        return view('company.employees.create', ['data' => $this->data], compact('branches', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        $data['status'] = $request->status ? 'active' : 'inactive';
        $data['password'] = bcrypt($request->password);
        $role = $data['job_type'] == 'messenger' ? 'messenger' : "driver";
        if ($request->has('photo')) {
            $photo = $this->upload($request->photo, 'employees');
            $data['photo'] = $photo;
        }
        $employee = Employee::create($data);
        $employee->attachRole($role);

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
    public function edit(Employee $employee)
    {
        $branches = auth()->user()->company->branches;
        $categories = auth()->user()->categories;
        return view('company.employees.edit', ['data' => $this->data], compact('employee', 'branches', 'categories'));
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
        $data = $request->validated();
        $data['status'] = $request->status ? 'active' : 'inactive';
        $data['password'] = $request->password ? bcrypt($request->password) : $employee->password;
        $role[] = $data['job_type'] == 'messenger' ? 'messenger' : "driver";
        if ($request->has('photo')) {
            $photo = $this->upload($request->photo, 'employees', true, $employee->photo);
            $data['photo'] = $photo;
        }
        $employee->update($data);
        $employee->syncRoles($role);

        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);

        Employee::destroy($ids['items']);

        return $this->setDeletedSuccess();

    }//end of bulkDelete function
}
