<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Provider\es_PE\Company;

class Employee extends Model
{
    //
    public function company()
    {
        $this->belongsTo(Company::class);
    }
}
