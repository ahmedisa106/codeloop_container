<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContainerRentalRequest;
use App\Models\Container;
use App\Models\ContainerRental;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContainerRentalController extends Controller
{

    use ResponseTrait;

    protected $data = [
        'page_title' => 'إيجار الحاويات',
        'create' => 'إضافه إيجار',
        'edit' => 'تعديل إيجار',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_container-rentals'])->only(['index', 'data']);
        $this->middleware(['permission:create_container-rentals'])->only(['create', 'store']);
        $this->middleware(['permission:update_container-rentals'])->only(['edit', 'update']);
        $this->middleware(['permission:delete_container-rentals'])->only(['destroy', 'bulkDelete']);
    }

    public function index()
    {
        return view('company.container_rentals.index', ['data' => $this->data]);
    }

    public function data()
    {
        if (auth()->user()->hasRole('admin')) {
            $rentals = auth()->user()->company->containerRentals;
        } elseif (auth()->user()->hasRole('messenger')) {
            $rentals = auth()->user()->containerRentals;
        }

        $model = 'container-rentals';
        return DataTables::of($rentals)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('model', 'raw'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->addColumn('contract', function ($raw) {

                return $raw->contract_type == 'contract' ? 'تعاقد' : 'نقدي';
            })
            ->addColumn('customer', function ($raw) {
                return $raw->customer->name;
            })
            ->addColumn('customer_address', function ($raw) {
                return $raw->customerAddress->address;
            })
            ->addColumn('total', function ($raw) {
                return $raw->total;
            })
            ->make(true);


    }//end of data function


    public function create()
    {
        $categories = auth()->user()->company->categories;
        $customers = auth()->user()->company->customers;
        $contracts = auth()->user()->company->contracts;
        $messengers = auth()->user()->company->availableMessengers;


        return view('company.container_rentals.create', ['data' => $this->data], compact('categories', 'customers', 'contracts', 'messengers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContainerRentalRequest $request)
    {
        $data = $request->validated();
        $data['company_id'] = auth()->user()->company->id;
        $data['messenger_id'] = $data['messenger_id'] ?? auth()->user()->id;
        $rental = ContainerRental::create($data);
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
    public function edit(ContainerRental $containerRental)
    {
        $categories = auth()->user()->company->categories;
        $customers = auth()->user()->company->customers;
        $contracts = auth()->user()->company->contracts;
        $containers = auth()->user()->company->availableContainers;
        $messengers = auth()->user()->company->availableMessengers;


        return view('company.container_rentals.edit', ['data' => $this->data], compact('categories', 'containers', 'customers', 'contracts', 'messengers', 'containerRental'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContainerRentalRequest $request, ContainerRental $containerRental)
    {
        $data = $request->validated();
        $data['messenger_id'] = $data['messenger_id'] ?? auth()->user()->id;

        $containerRental->update($data);
        return $this->setUpdatedSuccess();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContainerRental $containerRental)
    {
        $containerRental->delete();
        return $this->setDeletedSuccess();
    }

    public function bulkDelete(Request $request)
    {
        parse_str($request->ids, $ids);
        ContainerRental::destroy($ids['items']);
        return $this->setDeletedSuccess();

    }//end of bulkDelete function

    public function getContainers(Request $request)
    {
        $containers = Container::where('category_id', $request->cat_id)
            ->where('category_size_id', $request->cat_size_id)
            ->where('company_id', auth()->user()->company->id)
            ->where('status', 'available')
            ->get();


        return $this->setData($containers);


    }//end of getContainers function
}
