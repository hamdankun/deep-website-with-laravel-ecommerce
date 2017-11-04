<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'email', 'addresss', 'postal_code'
    ];

    /**
     * Relation with orders
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders() {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
