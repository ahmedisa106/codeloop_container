<?php

namespace App\Http\Controllers\Api\Company;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContainerRentalResource;
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

//        $rents = ContainerRental::query()->join('companies', 'container_rentals.company_id', 'companies.id')
//            ->select('container_rentals.*')
//            ->get();

        $rents = ContainerRentalResource::collection(auth('api')->user()->containerRentals);
        return $this->setStatus('success')->setCode(200)->setData($rents)->send();
    }//end of getAllRental function

    public function show(Request $request)
    {
        $containerRental = ContainerRental::find($request->id);
        if (!$containerRental) {
            return $this->setStatus('Error')->setCode(401)->setMessage('للأسف لايوجد بيانات')->send();
        }
        $containerRental = new ContainerRentalResource($containerRental);
        return $this->setStatus('success')->setCode(200)->setData($containerRental)->send();

    }//end of show function

    public function getStatus(Request $request)
    {
        $rentals = ContainerRental::query()->join('companies', 'container_rentals.company_id', '=', 'companies.id')
            ->select('container_rentals.*')
            ->where('container_rentals.status', $request->status)
            ->get();
        $rents = ContainerRentalResource::collection($rentals);
        return $this->setStatus('success')->setCode(200)->setData($rents)->send();
    }//end of  function
}
