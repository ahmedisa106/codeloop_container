<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyHistory extends Model
{
    protected $table = 'company_histories';

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }//end of company function
}
