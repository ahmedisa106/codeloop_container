<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyClauses extends Model
{
    protected $table = 'company_clauses';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');

    }//end of company function

}
