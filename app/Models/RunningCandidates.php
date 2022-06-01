<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunningCandidates extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        "candidate_id",
        "ballot_id",
    ];

    protected $fillable = [
        "entered_race_date",
        "ended_race_date",
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
