<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    protected $guarded = ['id'];


    function reports (){
        return $this->hasMany(Report::class);
    }
}
