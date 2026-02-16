<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'employee_id',
        'phone',
        'emergency_contact',
        'nid',
        'type',
        'shift',
        'address',
        'blood_type',
        'profile_image',
    ];
}
