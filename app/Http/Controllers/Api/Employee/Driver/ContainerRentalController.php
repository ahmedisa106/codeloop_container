<?php

namespace App\Http\Controllers\Api\Employee\Driver;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContainerRentalResource;
use App\Models\ContainerRental;

class ContainerRentalController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware('auth:employee_api');
    }//end of __construct function

    public function getContainerRentalsgetContainerRentals()
    {

        $rentals = ContainerRental::query()->join('companies', 'container_rentals.company_id', '=', 'companies.id')
            ->select('container_rentals.*')
            ->where('container_rentals.driver_id', auth('employee_api')->user()->id)
            ->get();


        $rentals = ContainerRentalResource::collection($rentals);

        return $this->setStatus('success')->setCode(200)->setData($rentals)->send();

    }//end of getContainerRentals function


}
