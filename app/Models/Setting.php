<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $guarded = [];
    protected $appends = ['image', 'footer'];

    public function getImageAttribute()
    {
        if (!$this->logo) {
            return asset('default/default.png');
        }
        return asset('images/settings/' . $this->logo);

    }//end of getImageAttribute function


    public function getFooterAttribute()
    {
        if (!$this->footer_logo) {
            return asset('default/default.png');
        }
        return asset('images/settings/' . $this->footer_logo);

    }//end of getFooterLogoAttribute function
}
