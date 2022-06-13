<?php

namespace App\Models;


use App\Contract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\File;
use Laratrust\Traits\LaratrustUserTrait;

class Company extends Authenticatable
{
    use LaratrustUserTrait;

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
        return $this->hasMany(Category::class)->where('company_id', auth()->user()->company->id);
    }//end of categories function

    public function categorySizes()
    {
        return $this->hasMany(CategorySize::class)->where('company_id', auth()->user()->company->id);
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
        return $this->hasMany(Employee::class)->where('company_id', auth()->user()->company->id)->where('job_type', 'messengers');

    }//end of drivers function

    public function trucks()
    {
        return $this->hasMany(Truck::class)->where('company_id', auth()->user()->company->id);
    }//end of trucks function

    public function customers()
    {
        return $this->hasMany(Customer::class)->where('company_id', auth()->user()->company->id);
    }//end of customers function

    public function containers()
    {
        return $this->hasMany(Container::class)->where('company_id', auth()->user()->company->id);
    }//end of containers function

    public function contracts()
    {
        return $this->hasMany(Contract::class)->where('company_id', auth()->user()->company->id);
    }//end of contracts function

    public function containerRentals()
    {

        return $this->hasMany(ContainerRental::class)->where('company_id', auth()->user()->company->id);


    }//end of containerRentals function

}
