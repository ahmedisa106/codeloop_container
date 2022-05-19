<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guarded = [];
    protected $appends = ['image'];


    public static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            File::delete(public_path('images/blogs/' . $model->photo));
        });

    }//end of  function

    public function getImageAttribute()
    {
        if (!$this->photo) {
            return asset('default/default.png');
        }

        return asset('images/blogs/' . $this->photo);

    }//end of getImageAttribute function
}
