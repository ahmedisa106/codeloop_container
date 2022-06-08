<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
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

}
