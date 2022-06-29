<?php

namespace App\Http\Controllers\Api\Company;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ContainerRental;
use Illuminate\Http\Request;

class ContainerRentalController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getAllRentals()
    {
        $rents = auth()->user()->containerRentals;
        return $this->setStatus('success')->setCode(200)->setData($rents)->send();
    }//end of getAllRental function

    public function show(Request $request)
    {
        $containerRental = ContainerRental::find($request->id);
        if (!$containerRental) {
            return $this->setStatus('Error')->setCode(404)->setMessage('لا يوجد بيانات')->send();
        }

        return $this->setStatus('success')->setCode(200)->setData($containerRental)->send();

    }//end of show function

    public function getStatus(Request $request)
    {
        $rentals = ContainerRental::query()->join('companies', 'container_rentals.company_id', '=', 'companies.id')
            ->select('container_rentals.*')
            ->where('container_rentals.status', $request->status)
            ->get();

        return $this->setStatus('success')->setCode(200)->setData($rentals)->send();


    }//end of  function
}