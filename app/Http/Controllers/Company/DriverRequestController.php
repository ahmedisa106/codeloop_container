<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\DriverRequest;
use Yajra\DataTables\Facades\DataTables;

class DriverRequestController extends Controller
{
    protected $data = [
        'page_title' => 'طلباتي',
    ];

    public function __construct()
    {
        $this->middleware(['permission:read_driver-requests'])->only(['index', 'data']);
    }

    public function data()
    {
        $requests = auth()->user()->requests;
        return DataTables::of($requests)
            ->addColumn('details', function ($raw) {
                return '<a href="' . route('driver-requests.show', $raw->id) . '" class="btn btn-warning btn-sm">التفاصيل</a>';
            })
            ->addColumn('type', function ($raw) {
                $type = $raw->type == "delivery" ? "طلب توصيل" : "طلب تفريغ";
                return "<span class='btn  btn-sm'>" . $type . "</span>";
            })
            ->rawColumns(['details' => 'details', 'type' => 'type'])
            ->make(true);

    }//end of data function

    public function index()
    {
        return view('company.driver_requests.index', ['data' => $this->data]);

    }//end of index function

    public function show($id)
    {
        $request = DriverRequest::find($id);

        $containerRental = $request->containerRental;
        return view('company.driver_requests.show', compact('request', 'containerRental'));
    }//end of show function
}
