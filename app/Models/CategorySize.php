<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class CategorySize extends Model
{
    protected $table = 'category_sizes';

    protected $guarded = [];

    public function category(){

        return $this->belongsTo(Category::class,'category_id');

    }//end of category function

    public function company(){

        return $this->belongsTo(Company::class,'company_id');

    }//end of company function
}
