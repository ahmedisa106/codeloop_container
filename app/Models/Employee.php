<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class Employee extends Authenticatable
{
    use LaratrustUserTrait;

    protected $table = 'employees';
    protected $guarded = [];
    protected $with = ['branch', 'company'];

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
        return $this->hasMany(ContainerRental::class, 'messenger_id')->where('messenger_id', auth()->user()->id);
    }//end of containerRentals function

    public function driverRentals()
    {
        return $this->hasMany(ContainerRental::class, 'driver_id')->where('driver_id', auth()->user()->id);
    }//end of rentals function


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }//end of category function

    public function discharges()
    {
        return $this->hasMany(Discharge::class);
    }//end of discharges function

    public function requests()
    {
        return $this->hasMany(DriverRequest::class, 'driver_id');
    }//end of requests function

    public static function containers()
    {
        $containers = Container::where('branch_id', auth()->user()->branch->id)->get();
        return $containers;
    }//end of containers function

}
