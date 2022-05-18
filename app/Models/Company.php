<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
