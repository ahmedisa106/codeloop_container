<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Company extends Model
{
    protected $table = 'companies';
    protected $guarded = [];
    protected $appends = ['image'];
    protected $with = ['packages', 'package'];

    public function getImageAttribute()
    {
        if (!$this->logo) {
            return asset('default/default.png');
        }
        return asset('images/companies/' . $this->logo);
    }//end of getLogo function

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            File::delete(public_path('images/companies/' . $model->logo));
        });

    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'company_packages', 'package_id', 'company_id')->withTimestamps();
    }//end of package function

    public function package()
    {
        return $this->hasOne(CompanyPackage::class)->oldest('package_finish_at');

    }//end of package function
}
