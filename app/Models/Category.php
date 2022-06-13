<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function containers()
    {
        return $this->hasMany(Container::class);
    }//end of containers function

    public function sizes()
    {
        return $this->hasMany(CategorySize::class);
    }//end of sizes function

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class);


    }//end of containerRentals function


}
