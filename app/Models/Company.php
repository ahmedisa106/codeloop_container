<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\File;
use Laratrust\Traits\LaratrustUserTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Company extends Authenticatable implements JWTSubject
{
    use LaratrustUserTrait;

    protected $table = 'companies';
    protected $guarded = [];
    protected $appends = ['image', 'sealImage'];

    protected $hidden = ['created_at', 'updated_at'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getImageAttribute()
    {
        if (!$this->logo) {
            return asset('default/default.png');
        }
        return asset('images/companies/' . $this->logo);
    }//end of getLogo function

    public function getSealImageAttribute()
    {
        if (!$this->seal) {
            return asset('default/default.png');
        }
        return asset('images/companies/' . $this->seal);
    }//end of getSealImageAttribute function

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            File::delete(public_path('images/companies/' . $model->logo));
        });
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'company_packages', 'package_id', 'company_id')->withTimestamps();
    }//end of package function

    public function package()
    {
        return $this->hasOne(CompanyPackage::class)->latest('id');
    }//end of package function

    public function packageSubscribed()
    {
        return $this->hasOne(CompanyPackage::class)->where('status', 'subscribed')->latest('id');
    }//end of package function

    public function history()
    {
        return $this->hasMany(CompanyHistory::class)->latest();
    }//end of histories function


    public function branches()
    {
        return $this->hasMany(Branch::class)->where('company_id', auth()->user()->company->id);
    }//end of branches function

    public function categories()
    {
        if (auth()->user()->hasRole('admin')) {
            return $this->hasMany(Category::class)->where('company_id', auth()->user()->company->id)->latest();
        } elseif (auth()->user()->hasRole('messenger')) {
            return $this->hasMany(Category::class)->where('company_id', auth()->user()->company->id)->where('id', auth()->user()->category_id)->latest();
        }
    }//end of categories function

    public function categorySizes()
    {
        return $this->hasMany(CategorySize::class)->where('company_id', auth()->user()->company->id)->latest();
    }//end of categorySizes function

    public function rentTypes()
    {
        return $this->hasMany(RentType::class)->where('company_id', auth()->user()->company->id);
    }//end of rentTypes function

    public function jobTypes()
    {
        return $this->hasMany(JobType::class)->where('company_id', auth()->user()->company->id);
    }//end of jobTypes function

    public function company()
    {
        return $this->hasOne(Company::class, 'id');
    }//end of company function

    public function apps()
    {
        return $this->hasMany(App::class)->where('company_id', auth()->user()->company->id);
    }//end of apps function

    public function moderators()
    {
        return $this->hasMany(Moderator::class)->where('company_id', auth()->user()->company->id);
    }//end of moderators function

    public function employees()
    {
        return $this->hasMany(Employee::class)->where('company_id', auth()->user()->company->id);
    }//end of employees function

    public function drivers()
    {
        return $this->hasMany(Employee::class)->where('company_id', auth()->user()->company->id)->where('job_type', 'driver');

    }//end of drivers function

    public function messengers()
    {
        return $this->hasMany(Employee::class)->where('company_id', auth()->user()->company->id)->where('job_type', 'messenger');
    }//end of drivers function

    public function availableMessengers()
    {
        return $this->hasMany(Employee::class)->where('company_id', auth()->user()->company->id)->where('job_type', 'messenger')->where('status', 'active');

    }//end of drivers function

    public function trucks()
    {
        return $this->hasMany(Truck::class)->where('company_id', auth()->user()->company->id);
    }//end of trucks function

    public function customers()
    {
        return $this->hasMany(Customer::class)->where('company_id', auth()->user()->company->id)->latest();
    }//end of customers function

    public function containers()
    {
        return $this->hasMany(Container::class)->where('company_id', auth()->user()->company->id);
    }//end of containers function

    public function availableContainers()
    {
        return $this->hasMany(Container::class)->where('company_id', auth()->user()->company->id)->where('status', 'available');
    }//end of containers function

    public function contracts()
    {
        return $this->hasMany(Contract::class)->where('company_id', auth()->user()->company->id);
    }//end of contracts function

    public function containerRentals()
    {
        return $this->hasMany(ContainerRental::class)->where('company_id', auth()->user()->company->id);
    }//end of containerRentals function

    public static function invoiceSerial($number)
    {
        return '#' . sprintf('%05d', $number);

    }

    public function clauses()
    {
        return $this->hasMany(CompanyClauses::class)->where('company_id', auth()->user()->company->id);
    }//end of clauses function


}
