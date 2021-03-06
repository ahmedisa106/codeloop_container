<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $guarded = [];
    protected $appends = ['image'];
    protected $hidden = ['photo', 'created_at', 'updated_at'];


    public function getImageAttribute()
    {
        if (!$this->photo) {
            return asset('default/default.png');
        }

        return asset('images/about/' . $this->photo);

    }//end of getImageAttribute function
}
