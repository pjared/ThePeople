<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicOfficePosition extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "name",
        "years_per_term",
        "limit_terms",
    ];
    use HasFactory;
}
