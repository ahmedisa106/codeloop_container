<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPackage extends Model
{
    protected $table = 'company_packages';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');

    }//end of companies function

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }//end of companies function

}
