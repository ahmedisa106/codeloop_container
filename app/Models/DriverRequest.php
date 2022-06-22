<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverRequest extends Model
{
    protected $table = 'driver_requests';
    protected $guarded = [];
    protected $with = ['containerRental', 'driver'];

    public function containerRental()
    {
        return $this->belongsTo(ContainerRental::class, 'container_rental_id');
    }//end of  function

    public function driver()
    {
        return $this->belongsTo(Employee::class, 'driver_id')->where('job_type', 'driver');
    }//end of driver function

    public function container()
    {
        return $this->belongsTo(Container::class, 'container_id', 'id');


    }//end of container function


}
