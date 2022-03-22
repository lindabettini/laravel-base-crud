<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title', 'decription', 'thumb', 'price', 'series', 'sale_date', 'type'
    ];
}
