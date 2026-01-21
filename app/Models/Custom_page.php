<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custom_page extends Model
{
    protected $table = 'custom_pages'; 

    protected $fillable = ['title', 'slug', 'content', 'status', 'meta_title', 'meta_keywords', 'meta_description'];
}
