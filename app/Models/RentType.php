<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentType extends Model
{
    protected $table = 'rent_types';

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function
}
