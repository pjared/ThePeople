<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunningCandidates extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "candidate_id",
        "ballot_id",
        "entered_race_date",
        "ended_race_date",
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function ballot() {
        return $this->belongsTo(Ballot::class, 'ballot_id');
    }
}
