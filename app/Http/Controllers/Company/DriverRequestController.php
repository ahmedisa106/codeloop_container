<?php

namespace App\Http\Controllers\Company;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Models\DriverRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DriverRequestController extends Controller
{
    use Upload;

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
                return '<a href="' . route('driver-requests.show', $raw->id) . '" class="btn btn-warning btn-icon">التفاصيل</a>';
            })
            ->addColumn('type', function ($raw) {
                $type = $raw->type == "delivery" ? "طلب توصيل" : "طلب تفريغ";
                return "<span>" . $type . "</span>";
            })
            ->addColumn('status', function ($raw) {
                switch ($raw->status) {
                    case 'waiting_approval':
                        $status = 'في إنتظار الموافقه';
                        break;
                    case 'in_delivery':
                        $status = 'في الطريق للتوصيل';
                        break;
                    case 'delivered':
                        $status = 'تم التوصيل';
                        break;
                    case 'in_discharge':
                        $status = 'في الطريق للتفريغ';
                        break;
                    case 'discharged':
                        $status = 'تم التفريغ';
                        break;

                }
                return $status;
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

    public function inDelivery(Request $request)
    {
        $driver_request = DriverRequest::find($request->request_id);
        $driver_request->update(['status' => 'in_delivery']);
        $driver_request->containerRental()->update(['status' => 'in_delivery']);

        session()->flash('success', 'تم بدأ التوصيل');
        return redirect()->back();

    }//end of inDelivery function

    public function inDischarge(Request $request)
    {
        $driver_request = DriverRequest::find($request->request_id);
        $driver_request->update(['status' => 'in_discharge']);
        $driver_request->containerRental()->update(['status' => 'in_discharge']);

        session()->flash('success', 'تم بدأ التفريغ');
        return redirect()->back();

    }//end of inDelivery function

    public function delivered(Request $request)
    {
        $request->validate([
            'delivered_photo' => 'required|image|mimes:png,jpg,jpeg,webp,svg'
        ], [], [
            'delivered_photo' => 'صوره الحاويه'
        ]);

        $delivered_photo = $request->hasFile('delivered_photo') ? $this->upload($request->delivered_photo, 'container_rentals', false, '') : '';
        $driver_request = DriverRequest::find($request->request_id);
        $driver_request->update(['status' => 'delivered']);
        $driver_request->containerRental()->update([
            'status' => 'delivered',
            'delivered_photo' => $delivered_photo,
        ]);
        $driver_request->driver()->update(['status' => 'active']);

        session()->flash('success', 'تم التوصيل بنجاح');
        return redirect()->back();


    }//end of delivered function


    public function discharged(Request $request)
    {
        $request->validate([
            'receipt_number' => 'required|integer'
        ], [], [
            'receipt_number' => 'رقم الإيصال'
        ]);


        $driver_request = DriverRequest::find($request->request_id);
        $driver_request->update(['status' => 'discharged']);
        $driver_request->containerRental()->decrement('remaining_discharges');

        if ($driver_request->containerRental->remaining_discharges <= 1) {

            $driver_request->containerRental()->update(['status' => 'complete']);
            $driver_request->containerRental->container()->update(['status' => 'available']);
        } else {
            $driver_request->containerRental()->update([
                'status' => 'discharged',
            ]);
        }


        $container_rental = $driver_request->containerRental;

        $container_rental->discharges()->create([
            'container_id' => $container_rental->container_id,
            'driver_id' => $driver_request->driver_id,
            'receipt_number' => $request->receipt_number,
        ]);

        $driver_request->driver()->update(['status' => 'active']);

        session()->flash('success', 'تم التفريغ بنجاح');
        return redirect()->back();


    }//end of delivered function
}
