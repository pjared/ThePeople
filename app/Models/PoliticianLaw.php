<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticianLaw extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [
        "law_id",
        "politician_id",
    ];
}
