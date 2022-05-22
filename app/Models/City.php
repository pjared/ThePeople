<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends GeographicLocation
{
    public $timestamps = false;

    protected $fillable = [
        "county_id",
    ];
    use HasFactory;
}
