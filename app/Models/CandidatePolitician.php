<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * A politician is a candidate multiple times.
 */
class CandidatePolitician extends Pivot
{
    use HasFactory;
    
    public $timestamps = false;
    protected $primaryKey = 'politician_id';
    public $incrementing = false;

    protected $guarded = [
        "politician_id",
        "candidate_id",
    ];
}
