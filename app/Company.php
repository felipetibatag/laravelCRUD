<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function employees()
    {
        $this->hasMany(Employee::class);
    }

}
