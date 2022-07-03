<?php

namespace App\Http\Controllers\Api\Employee\Messenger;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:employee_api');
    }//end of __construct function

    public function getCustomers()
    {
        $customers = auth('employee_api')->user()->company->customers;
        return $this->setStatus('success')->setCode(200)->setData(CustomerResource::collection($customers))->send();

    }//end of getCustomers function

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:customers,name',
            'email' => 'email|required|unique:customers,email',
            'phone' => 'required|numeric',
            'address' => 'required|array|min:1',
            'address.*' => 'required|array|min:1',
            'address.*.address' => 'required',
            'address.*.latitude' => 'required',
            'address.*.longitude' => 'required',
        ], [], [
            'name' => 'الإسم',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'address.*.address' => 'العنوان',
            'address.*.latitude' => 'دوائر العرض',
            'address.*.longitude' => 'خط الطول',
        ]);

        if ($validator->fails()) {
            return $this->setStatus('Error')->setCode(401)->setData($validator->errors()->first())->send();
        }
        $data = $request->except(['address']);
        $data['company_id'] = auth('employee_api')->user()->company->id;


        DB::beginTransaction();
        $customer = Customer::create($data);
        $customer->addresses()->createMany($request->address);
        DB::commit();

        $customer = new CustomerResource($customer);
        return $this->setStatus('success')->setCode(200)->setData($customer)->send();

    }//end of create function

}
