<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        
    ];

    protected $fillable = [
        "name",
        'state',
        "type",
        "population",
        "opinion_type_id",
    ];
}
