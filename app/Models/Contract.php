<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class);
    }//end of containerRentals function
}
