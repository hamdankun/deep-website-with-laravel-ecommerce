<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'customer_id', 'total', 'payment_method', 'delivery_type'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function details() {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
