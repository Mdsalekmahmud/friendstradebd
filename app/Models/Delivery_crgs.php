<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery_crgs extends Model
{
    protected $fillable = [
        'location',
        'delivery_charge',
        'status',
    ];
}
