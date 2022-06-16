<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContainerRental extends Model
{
    protected $table = 'container_rentals';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }//end of category function

    public function categorySize()
    {
        return $this->belongsTo(CategorySize::class, 'category_size_id');
    }//end of categorySize function

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }//end of customer function

    public function customerAddress()
    {
        return $this->belongsTo(CustomerAddress::class, 'customer_address_id');
    }//end of customerAddress function

    public function contract()
    {
        return $this->hasOne(Contract::class)->where('company_id', auth()->user()->company->id);
    }//end of contract function

    public function container()
    {
        return $this->belongsTo(Container::class, 'container_id');
    }//end of container function

    public function messenger()
    {
        return $this->belongsTo(Employee::class, 'messenger_id')->where('job_type', 'messenger');
    }//end of messenger function

    public function driver()
    {
        return $this->belongsTo(Employee::class, 'driver_id')->where('job_type', 'driver');
    }//end of driver function

}
