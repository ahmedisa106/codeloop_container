<?php

namespace App\Http\Controllers\Api\Company;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $rentals = $this->getContainerRentals();
        $contracts = $this->getContracts();
        $customers = $this->getCustomers();
        return $this->setStatus('success')->setCode(200)->setData(['customers' => $customers, 'container_rentals' => $rentals, 'contracts' => $contracts])->send();

    }//end of index function


    public function getCustomers()
    {
        $to = now();
        $from = now()->subMonths(5);
        $duration = $to->diffInMonths($from);

        $customers = [];
        $months = [];

        for ($x = 1; $x <= $duration; $x++) {
            array_unshift($customers, ['month' => $to->format('M'), 'value' => Customer::query()->whereMonth('created_at', $to->format('m'))->count()]);
            array_unshift($months, $to->format('M'));
            $to->subMonth();

        }
        return $customers;

    }//end of getCustomers function

    public function getContainerRentals()
    {
        $rentals = DB::table('container_rentals')->where('company_id', auth('api')->user()->id)
            ->select('status', DB::raw('count(id) as count'))->groupBy('status')->get();
        return $rentals;

    }//end of getContainerRentals function

    public function getContracts()
    {
        $contracts = DB::table('contracts')->where('company_id', auth('api')->user()->id)
            ->select('status', DB::raw('count(id) as count'))->groupBy('status')->get();
        return $contracts;

    }//end of getContainerRentals function
}
