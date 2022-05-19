<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = [];
    protected $appends = ['image'];


    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            File::delete(public_path('images/services/' . $model->photo));
        });
    }

    public function getImageAttribute()
    {
        if (!$this->photo) {
            return asset('default/default.png');
        }
        return asset('images/services/' . $this->photo);


    }//end of  function
}
