<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
    protected $with = ['company', 'containerRentals', 'customer', 'messenger'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function containerRentals()
    {
        return $this->belongsTo(ContainerRental::class, 'container_rental_id');
    }//end of containerRentals function

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }//end of customer function

    public function messenger()
    {
        return $this->belongsTo(Employee::class, 'messenger_id');

    }//end of  function
}
