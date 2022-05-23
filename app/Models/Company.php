<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Company extends Model
{
    protected $table = 'companies';
    protected $guarded = [];
    protected $appends = ['image'];

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

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');


    }//end of package function
}
