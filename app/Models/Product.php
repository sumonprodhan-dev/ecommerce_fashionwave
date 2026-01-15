<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';

    protected $casts = [
    'product_tag_id' => 'array',
    ];

    function category(){
        return $this->belongsTo(Category::class);
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }

    function tags(){
        return $this->belongsToMany(Tag::class);
    }


    
}
