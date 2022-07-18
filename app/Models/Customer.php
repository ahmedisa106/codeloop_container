<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $guarded = [];
    protected $with = ['addresses', 'containerRentals'];


    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class);
    }//end of  function

    public function addresses()
    {
        return $this->hasMany(CustomerAddress::class, 'customer_id');
    }//end of address function

    public function contracts()
    {
        return $this->hasMany(Contract::class);


    }//end of  function
}
