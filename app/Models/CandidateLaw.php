<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLaw extends pivot
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [
        "law_id",
        "candidate_id",
    ];
}
