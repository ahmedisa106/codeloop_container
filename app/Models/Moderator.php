<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class Moderator extends Authenticatable
{
    use LaratrustUserTrait;

    protected $guard = 'moderator';
    protected $table = 'moderators';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function
}
