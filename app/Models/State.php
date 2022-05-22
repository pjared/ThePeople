<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends GeographicLocation
{
    public $timestamps = false;
    
    use HasFactory;
}
