<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * This model may seem unnecessary, and you may ask why this is not in the candidate model.
 * When the candidates election is over and they run again next year, we can keep their old ballot profiles to use for accountability
 */
class RunningCandidates extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        "candidate_id",
        "ballot_id",
        "entered_race_date",
        "ended_race_date",
        "show",
        'order',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function ballot() {
        return $this->belongsTo(Ballot::class, 'ballot_id');
    }
}
