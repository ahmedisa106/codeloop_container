<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Client extends Model
{
    protected $table = 'clients';
    protected $guarded = [];
    protected $appends = ['image'];


    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::deleting(function ($model) {
            File::delete(public_path('images/clients/' . $model->photo));
        });
    }

    public function getImageAttribute()
    {
        if (!$this->photo) {
            return asset('default/default.png');
        }
        return asset('images/clients/' . $this->photo);
    }//end of getImageAttribute function
}
