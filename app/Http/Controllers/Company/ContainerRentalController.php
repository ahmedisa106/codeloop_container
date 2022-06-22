<?php

namespace App\Http\Controllers\Company;

use App\Helper\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContainerRentalRequest;
use App\Models\Container;
use App\Models\ContainerRental;
use App\Models\Contract;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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
        } elseif (auth()->user()->hasRole('driver')) {
            $rentals = auth()->user()->driverRentals;
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
            ->addColumn('details', function ($raw) {
                return '<a class="btn btn-warning btn-icon" href="' . route('container-rentals.show', $raw->id) . '">تفاصيل</a>';
            })
            ->rawColumns(['details' => 'details'])
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
        $data['remaining_discharges'] = $data['discharge_number'];
        $data['messenger_id'] = $data['messenger_id'] ?? auth()->user()->id;
        $contract_data = ['area_name' => $data['area_name'], 'area_number' => $data['area_number'], 'block_number' => $data['block_number'], 'plan_number' => $data['plan_number']];
        unset($data['area_name'], $data['area_number'], $data['block_number'], $data['plan_number']);

        DB::beginTransaction();

        $rent = ContainerRental::create($data);

        $rent->container->update(['status' => 'notAvailable']);

        $number = $this->getLatestContractSerial();


        if ($data['contract_type'] == 'contract') {
            $file_name = time() . '_' . $number . '.pdf';
            $rent->contract()->create([
                'contract_serial' => $number,
                'company_id' => $rent['company_id'],
                'customer_id' => $rent['customer_id'],
                'messenger_id' => $rent['messenger_id'],
                'qr' => '',
                //'pdf' => $file_name,
                'area_name' => $contract_data['area_name'],
                'area_number' => $contract_data['area_number'],
                'block_number' => $contract_data['block_number'],
                'plan_number' => $contract_data['plan_number']
            ]);
            $rent->contract()->update([
                'qr' => QrCode::size(100)->generate(route('contracts.pdf', $rent->contract->id))
            ]);
        }


//        $contract = $rent->contract;
//        $path = public_path('pdfs/' . $file_name);
//        if (!file_exists(public_path('pdfs/'))) {
//            mkdir(public_path('pdfs'), 0777, true);
//            $pdf = PDF::loadView('company.contracts.pdfTheme.test10', compact('contract'))->save($path);
//        } else {
//            $pdf = PDF::loadView('company.contracts.pdfTheme.test10', compact('contract'))->save($path);
//        }


        DB::commit();

        return $this->setAddedSuccess();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContainerRental $containerRental)
    {
        $drivers = Employee::where('company_id', auth()->user()->company->id)->where('job_type', 'driver')->where('status', 'active')->get();
        return view('company.container_rentals.show', compact('containerRental', 'drivers'));

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
        $data['remaining_discharges'] = $data['discharge_number'];
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

    public function getLatestContractSerial()
    {
        $serial = Contract::where('company_id', auth()->user()->company->id)->latest()->first();
        if (!$serial) {
            return 1;
        } else {
            return $serial->contract_serial + 1;
        }
    }//end of getLatestContractSerial function

    public function assignDriverToDrive(Request $request)
    {
        $rent = ContainerRental::find($request->container_rental_id);
        $rent->update(['driver_id' => $request->driver_id]);
        $driver = Employee::find($request->driver_id);
        $driver->update(['status' => 'inactive']);
        $driver->requests()->create([
            'container_rental_id' => $rent->id,
            'type' => 'delivery',
            'status' => 'waiting_approval'
        ]);

        session()->flash('success', 'تم توجيه سائق للتوصيل');
        return redirect()->back();

    }//end of  function

    public function assignDriverToDischarge(Request $request)
    {
        $rent = ContainerRental::find($request->container_rental_id);
        $rent->update(['driver_id' => $request->driver_id]);
        $driver = Employee::find($request->driver_id);
        $driver->update(['status' => 'inactive']);
        $driver->requests()->create([
            'container_rental_id' => $rent->id,
            'type' => 'discharge',
            'status' => 'waiting_approval'
        ]);

        session()->flash('success', 'تم توجيه سائق للتفريغ');
        return redirect()->back();

    }//end of  function

}
