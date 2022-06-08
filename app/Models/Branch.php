<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $guarded = [];
    protected $appends = ['image'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }//end of company function

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }//end of employees function

    public function getImageAttribute()
    {
        if ($this->photo != null) {
            return asset('images/branches/' . $this->photo);
        }
        return asset('default/default.png');

    }//end of getImageAttribute function

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::deleting(function ($raw) {
            \Illuminate\Support\Facades\File::delete(public_path('images/branches/' . $raw->photo));
        });
    }
}
