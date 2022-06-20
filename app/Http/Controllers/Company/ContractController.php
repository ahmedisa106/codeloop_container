<?php

namespace App\Http\Controllers\Company;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contract;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use Yajra\DataTables\Facades\DataTables;

class ContractController extends Controller
{
    protected $data = [
        'page_title' => 'العقود'
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_contracts'])->only(['index', 'data']);


    }//end of __construct function

    public function data(Request $request)
    {

        $contracts = auth()->user()->company->contracts;
        return DataTables::of($contracts)
            ->addColumn('customer', function ($raw) {
                return $raw->customer->name;
            })
            ->addColumn('number', function ($raw) {
                return Company::invoiceSerial($raw->contract_serial);
            })
            ->addColumn('contract', function ($raw) {
                return '   <div class="btns-table">
                                    <a href="' . route('contracts.pdf', $raw->id) . '"
                                        target="_balnk" class="btn btn-primary">
                                        <i class="fa fa-file-pdf-o"></i>
                                        معاينة العقد
                                    </a>
                                </div>';
            })
            ->addColumn('start_at', function ($raw) {
                return Numbers::ShowInArabicDigits(Carbon::create($raw->containerRentals->start_at)->format('d / m / Y'));
            })
            ->addColumn('end_at', function ($raw) {
                return Numbers::ShowInArabicDigits(Carbon::create($raw->containerRentals->end_at)->format('d / m / Y'));
            })
            ->addColumn('messenger', function ($raw) {
                return $raw->messenger->name;
            })
            ->addColumn('status', function ($raw) {
                switch ($raw->status) {
                    case 'on':
                        $class = 'valid-con';
                        $name = 'ساري';
                        break;
                    case 'off':
                        $class = 'expired-con';
                        $name = 'منتهي';
                        break;
                    case 'broken':
                        $class = 'canceled-con';
                        $name = 'ملغي';
                        break;

                }
                return "<span class='cont-status " . $class . " '>" . $name . "</span>";
            })
            ->filter(function ($q) use ($request) {

                if ($request->customer && $request->customer != '') {
                    $q->collection = $q->collection->filter(function ($row) use ($request) {
                        $row->where('customer_id', $request->customer);
                    });


                }
            })
            ->rawColumns(['status' => 'status', 'contract' => 'contract'])
            ->make(true);

    }//end of data function

    public function index()
    {
        $customers = auth()->user()->company->customers;
        $messengers = auth()->user()->company->messengers;


        return view('company.contracts.index', ['data' => $this->data], compact('messengers', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    public function pdf($id)
    {
        $contract = Contract::find($id);
        return view('company.test7', compact('contract'));

    }//end of loadPdf function
}
