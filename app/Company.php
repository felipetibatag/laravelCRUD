<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public $fillable = ['name', 'address', 'logo', 'website', 'email'];

    public function employees()
    {
        $this->hasMany(Employee::class);
    }

}
