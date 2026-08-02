<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id', 'buyer_name', 'buyer_city', 'notes', 'status'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
