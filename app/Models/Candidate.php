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
        "party_id",
        "year",
    ];

    protected $fillable = [
        "name",
        "age",
        "image_id",
    ];

    use HasFactory;

    public function party() {
        return $this->belongsTo(PoliticalParty::class, "party_id");
    }

    public function position() {
        return $this->belongsTo(PublicOfficePosition::class, "position_of_office_id");
    }
    
    public function donors() {
        return $this->belongsToMany(Donor::class)->using(CandidateDonors::class);
    }

    public function politician() {
        return $this->hasOneThrough(Politician::class, CandidatePolitician::class, 'candidate_id','name');
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
}
