<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name',
        'department_id',
        'designation',
        'shift',
        'phone',
        'description',
    ];
}
