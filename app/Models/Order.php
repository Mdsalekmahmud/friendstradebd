<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'quantity',
        'subtotal',
        'tax',
        'delivery_fee',
        'vat',
        'discount',
        'total_price',
        'payment_method',
        'payment_status',
        'transaction_id',
        'status',
    ];
}
