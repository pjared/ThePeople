<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * A candidate is someone currently running for office.
 */
class Candidate extends Model
{
    public $timestamps = false;

    protected $guarded = [
        
    ];

    protected $fillable = [
        "name",
        "dob",
        "user_id",
        "image_id",
        "party_id",
        "info",
        "signup_date",
        "email",
        "phone_number",
        'state'
    ];

    use HasFactory;

    public function party() {
        return $this->belongsTo(PoliticalParty::class, "party_id");
    }
    
    public function donors() {
        return $this->belongsToMany(Donor::class)->using(CandidateDonors::class);
    }

    public function ballot() {
        return $this->hasOneThrough(Ballot::class, RunningCandidates::class, 'candidate_id', 'id', 'id', 'ballot_id');
    }

    public function previous_positions() {
        return $this->hasMany(CandidateOfficePositions::class, 'candidate_id');
    }

    public function videos() {
        return $this->hasMany(CampaignVideo::class);
    }

    public function stances() {
        return $this->hasMany(CandidateStance::class);
    }

    public function opinions() {
        return $this->hasMany(Opinion::class);
    }

    public function law_involvement() {
        return $this->belongsToMany(Law::class)->using(CandidateLaw::class);
    }

    public function application() {
        return $this->hasOne(CandidateApplication::class);
    }

    public function permalink() {
        return $this->hasOne(CandidatePermaLink::class, 'candidate_id');
    }

    public function promises() {
        return $this->hasMany(CandidatePromise::class)
    }
}
