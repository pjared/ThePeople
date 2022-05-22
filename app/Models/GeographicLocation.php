<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeographicLocation extends Model
{
    public $timestamps = false;

    public $incrementing = false;
    
    protected $fillable = [
        "name",
        "population",
    ];
    use HasFactory;
}
