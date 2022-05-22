<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class County extends GeographicLocation
{
    public $timestamps = false;

    protected $fillable = [
        "state_id",
    ];
    use HasFactory;
}
