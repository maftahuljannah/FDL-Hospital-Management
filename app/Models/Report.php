<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = ['id'];

    function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
