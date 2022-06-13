<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $table = 'containers';

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }//end of company function

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }//end of company function

    public function categorySize()
    {
        return $this->belongsTo(CategorySize::class, 'category_size_id');
    }//end of company function

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class);


    }//end of containerRentals function
}
