<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';

    protected $casts = [
    'product_tag' => 'array',
    ];

    function category(){
        return $this->belongsTo(Category::class);
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }


    
}
