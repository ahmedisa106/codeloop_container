<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContainerRentalRequest;
use App\Models\Category;
use App\Models\Container;
use App\Models\ContainerRental;
use App\Models\Contract;
use App\Models\Customer;
use Mpdf\Http\Request;
use Yajra\DataTables\DataTables;

class ContainerRentalController extends Controller
{

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
        $rentals = ContainerRental::get();
        $model = 'container-rentals';
        return DataTables::of($rentals)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('company.includes.actions', compact('model', 'raw'));
            })
            ->addColumn('check_item', function ($raw) {
                return view('company.includes.check_item', compact('raw'));
            })
            ->make(true);


    }//end of data function


    public function create()
    {
        $categories = auth()->user()->company->categories;
        $customers = auth()->user()->company->customers;
        $contracts = auth()->user()->company->contracts;
        $containers = auth()->user()->company->availableContainers;
        $messengers = auth()->user()->company->availableMessengers;


        return view('company.container_rentals.create', ['data' => $this->data], compact('categories', 'containers', 'customers', 'contracts', 'messengers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContainerRentalRequest $request)
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
    public function edit(ContainerRental $rental)
    {
        $categories = Category::get(['id', 'name']);
        $customers = Customer::get(['id', 'name']);
        $contracts = Contract::get(['id', 'number']);
        $containers = Container::where('status', 'available')->get(['id', 'number']);
        return view('company.container_rentals.edit', ['data' => $this->data], compact('categories', 'containers', 'customers', 'contracts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContainerRentalRequest $request, ContainerRental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bulkDelete(Request $request)
    {

        dd($request->all());

    }//end of bulkDelete function
}
