<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LawMakingPivot extends Pivot
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [
        "law_id",
    ];

    protected $fillable = [
        "politician_id", // If this is set, it was a law passed while they were in office
        "candidate_id", //It this is set, they were involved in the lawmaking
    ]
}
