<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorySize extends Model
{
    protected $table = 'category_sizes';

    protected $guarded = [];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }//end of category function

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function containers()
    {
        return $this->hasMany(Container::class);
    }//end of  function

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class);
    }//end of containerRentals function
}
