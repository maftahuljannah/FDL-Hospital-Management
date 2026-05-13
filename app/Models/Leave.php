<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = [
        'doctor_id',
        'department_id',
        'title',
        'reason',
        'from_date',
        'to_date',
        'status'
    ];
}