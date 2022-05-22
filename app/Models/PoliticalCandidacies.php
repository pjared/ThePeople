<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * A politician is a candidate multiple times.
 */
class PoliticalCandidacies extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'politician_id';
    public $incrementing = false;

    protected $guarded = [
        "politician_id",
        "candidate_id",
    ];
    use HasFactory;
}
