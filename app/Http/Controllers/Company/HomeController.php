<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['permission:']);
//    }//end of __construct function

    public function index()
    {
        $data['admins_count'] = auth()->user()->company->moderators->count();
        $data['employees_count'] = auth()->user()->company->employees->count();
        $data['containers_count'] = auth()->user()->company->containers->count();
        $data['rent_count'] = auth()->user()->company->containerRentals->count();
        $rents = json_encode($this->rents(), JSON_UNESCAPED_UNICODE);

        if (auth()->user()->hasRole('driver')) {
            $data['requests_count'] = auth()->user()->requests;
        } elseif (auth()->user()->hasRole('messenger')) {
            $data['containers_count'] = Employee::containers()->count();
            $data['rent_count'] = auth()->user()->containerRentals->count();

        }


        return view('company.index', compact('data', 'rents'));
    }//end of index function


    public function rents()
    {
        $rents = DB::table('container_rentals')
            ->select(DB::raw('count(distinct id) as value'), 'status as name')
            ->groupBy('status');
        if (auth()->user()->hasRole('messenger')) {

            $rents = $rents->where('messenger_id', auth()->user()->id)
                ->get();

        } elseif (auth()->user()->hasRole('admin')) {

            $rents = $rents->where('company_id', auth()->user()->company->id)
                ->get();
        }


        $rents->map(function ($rent) {
            if ($rent->name == 'waiting_driver') {
                $rent->name = 'في إنتظار سائق متاح';
            } elseif ($rent->name == 'in_delivery') {
                $rent->name = 'في الطريق للتوصيل';
            } elseif ($rent->name == 'delivered') {
                $rent->name = 'تم التوصيل';
            } elseif ($rent->name == 'complete') {
                $rent->name = 'منتهي';
            } elseif ($rent->name == 'broken') {
                $rent->name = 'مفسوخ';
            }
        });


        return $rents;

    }//end of rents function


}
