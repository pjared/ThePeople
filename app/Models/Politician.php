<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * A politician is a person currently holding a level of public office. They m
 */
class Politician extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        "name",
        "home_city_id",
        "other_info",
    ];
    use HasFactory;
}
