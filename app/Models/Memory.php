<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $fillable = [
        'title',
        'description',
        'mood',
        'date',
        'photo',
        'is_favorite',
    ];

    protected $casts = [
        'is_favorite' => 'boolean',
        'date' => 'date',
    ];
}