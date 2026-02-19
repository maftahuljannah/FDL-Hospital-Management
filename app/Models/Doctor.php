<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'title',
        'name',
        'designation',
        'description',
        'gender',
        'status',
        'availability_time',
        'joining_date',
        'profile_image'
    ];
}
