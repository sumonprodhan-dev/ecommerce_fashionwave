<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_tag extends Model
{
    protected $table = 'product_tags';

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
