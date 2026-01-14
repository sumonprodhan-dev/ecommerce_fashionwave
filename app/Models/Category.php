<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = ['image'];

    protected $fillable = [
    'en_name',
    'gn_name',
    'slug',
    'en_description',
    'gn_description',
    'status',
    ];


    function products(){
        return $this->hasMany(Product::class);
    }
}
