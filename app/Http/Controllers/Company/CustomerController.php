<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    use ResponseTrait;

    protected $data = [
        'page_title' => 'العملاء',
        'create' => 'إضافه عميل',
        'edit' => 'تعديل عميل',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_customers'])->only(['index', 'data']);
        $this->middleware(['permission:create_customers'])->only(['create', 'store']);
        $this->middleware(['permission:update_customers'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_customers'])->only(['destroy', 'bulkDelete']);

    }//end of __construct function

    public function data()
    {
        $customers = auth()->user()->company->customers;
        $model = 'customers';
        return DataTables::of($customers)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->make(true);

    }//end of  function

    public function index()
    {
        return view('company.customers.index', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.customers.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        unset($data['address']);
        $customer = Customer::create($data);
        $customer->addresses()->createMany($request->address);
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
    public function edit(Customer $customer)
    {
        return view('company.customers.edit', ['data' => $this->data], compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();
        unset($data['address']);
        $customer->update($data);
        $customer->addresses()->delete();
        $customer->addresses()->createMany($request->address);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {

        parse_str($request->ids, $ids);
        Customer::destroy($ids['items']);
        return $this->setDeletedSuccess();
    }//end of bulkDelete function

    public function getCustomerAddresses(Request $request)
    {
        $addresses = Customer::find($request->id)->addresses;
        return $this->setData($addresses);

    }//end of getCustomerAddresses function
}
