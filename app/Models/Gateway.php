<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    protected $fillable = ['image', 'status', 'credentials'];

    protected $guarded = [];

    protected $casts = [
        'credentials' => 'array',
    ];
}
