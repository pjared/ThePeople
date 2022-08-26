<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserVotes extends Pivot
{
    use HasFactory;

    protected $table = 'user_votes';

    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "ballot_id",
        "running_candidate_id",
        "is_valid",
    ];

    public function ballot() {
        return $this->belongsTo(Ballot::class, 'ballot_id');
    }

    public function candidate() {
        return $this->hasOneThrough(Candidate::class, RunningCandidates::class, 'candidate_id', 'id', 'running_candidate_id');
    }
}
