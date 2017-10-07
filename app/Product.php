<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The Fillable Columns
     * @var array
     */
    protected $fillable = ['name', 'price', 'weight', 'description', 'image'];
}
