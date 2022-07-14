<?php

namespace App\Http\Controllers\Api\Company;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getAllEmployees()
    {
        $employees = auth('api')->user()->employees;
        return $this->setStatus('success')->setCode(200)->setData(EmployeeResource::collection($employees))->send();
    }//end of getAllEmployees function

    public function getEmployeesByType(Request $request)
    {
        $employees = Employee::query()->join('companies', 'employees.company_id', '=', 'companies.id')
            ->select('employees.*')
            ->where('employees.job_type', $request->type)
            ->get();
        return $this->setStatus('success')->setCode(200)->setData(EmployeeResource::collection($employees))->send();
    }//end of getAllEmployees function

    public function show(Request $request)
    {
        $employee = Employee::find($request->id);
        if (!$employee) {
            return $this->setStatus('Error')->setCode(400)->setMessage('لا يوجد بيانات')->send();
        }
        return $this->setStatus('success')->setCode(200)->setData(new EmployeeResource($employee))->send();
    }//end of getAllEmployees function

}
