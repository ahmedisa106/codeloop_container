<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');


    }//end of company function
}
