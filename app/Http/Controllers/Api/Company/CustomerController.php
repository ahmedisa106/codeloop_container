<?php

namespace App\Http\Controllers\Api\Company;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:api');


    }//end of __construct function

    public function getCustomers()
    {
        $customers = auth()->user()->company->customers;
        $customers = CustomerResource::collection($customers);

        return $this->setStatus('success')->setCode(200)->setData($customers)->send();

    }//end of getCustomers function

    public function show(Request $request)
    {
        $customer = Customer::find($request->id);

        if (!$customer) {
            return $this->setStatus('Error')->setCode(401)->setMessage('للأسف لايوجد بيانات')->send();
        }

        $customer = new CustomerResource($customer);

        return $this->setStatus('success')->setCode(200)->setData($customer)->send();

    }//end of show function

    public function filter(Request $request)
    {
        $customers = Customer::query()->join('companies', 'customers.company_id', '=', 'companies.id')
            ->select('customers.*')
            ->where('customers.name', 'like', '%' . $request->name . '%')
            ->get();

        $customers = CustomerResource::collection($customers);

        return $this->setStatus('success')->setCode(200)->setData($customers)->send();

    }//end of filter function

}
