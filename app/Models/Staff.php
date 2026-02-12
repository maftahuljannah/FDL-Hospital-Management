<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        "photo",
        "name",
        "designation",
        "duty_title",
        "duty_description",
        "email",
        "phone"
    ];
}
