<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class Employee extends Authenticatable
{
    use LaratrustUserTrait;

    protected $table = 'employees';
    protected $guarded = [];

    protected $appends = ['image'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }//end of branch function

    public function getImageAttribute()
    {
        if (!$this->photo) {
            return asset('default/default.png');
        }
        return asset('images/employees/' . $this->photo);
    }//end of getImageAttribute function

    protected static function boot()
    {
        parent::boot();
        self::deleting(function ($raw) {
            \Illuminate\Support\Facades\File::delete(public_path('images/employees/' . $raw->photo));
        });

    }

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class);
    }//end of containerRentals function

}
