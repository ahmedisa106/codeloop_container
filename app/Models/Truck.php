<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'trucks';

    protected $guarded = [];

    public function company()
    {

        return $this->belongsTo(Company::class, 'company_id');

    }//end of company function

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }//end of  function

    public function driver()
    {

        return $this->belongsTo(Employee::class, 'driver_id')->where('job_type', 'driver');

    }//end of driver function
}
