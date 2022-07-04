<?php

namespace App\Http\Controllers\Api\Employee\Messenger;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;

class DriverController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:employee_api');

    }//end of __construct function

    public function getDriver()
    {
        $drivers = Employee::query()->join('companies', 'employees.company_id', '=', 'companies.id')
            ->where('employees.job_type', 'driver')
            ->where('employees.status', 'active')
            ->where('employees.branch_id', auth('employee_api')->user()->branch->id)
            ->select('employees.*')
            ->get();

        $drivers = EmployeeResource::collection($drivers);

        return $this->setStatus('success')->setCode(200)->setData($drivers)->send();
    }//end of  getDrivers function
}
