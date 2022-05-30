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
        "public_office_id",
        "location_id",
        "location_type",
    ];

    protected $fillable = [
        "entered_race_date",
        "ended_race_date",
        "race_is_over",
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
