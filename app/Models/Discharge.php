<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discharge extends Model
{
    protected $table = 'discharges';
    protected $guarded = [];

    public function containerRental()
    {
        return $this->belongsTo(ContainerRental::class, 'container_rental_id');
    }//end of containerRental function

    public function driver()
    {
        return $this->belongsTo(Employee::class, 'driver_id')->where('job_type', 'driver');
    }//end of driver function

    public function container()
    {
        return $this->belongsTo(Container::class, 'container_id');
    }//end of container function
}
