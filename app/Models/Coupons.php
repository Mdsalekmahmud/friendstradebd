<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $fillable = [
        'code',
        'title',
        'type',
        'value',
        'discount_amount',
        'minimum_order_amount',
        'max_discount_amount',
        'expiry_date',
        'status',
    ];
}
