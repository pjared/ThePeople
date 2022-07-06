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
        "bio",
        "contact_email",
        "contact_phone_number",
        "email",
        "phone_number",
        'state',
        'political_leaning',
        'sub_political_leaning',
        "signup_date",
        "user_id",
        "party_id",
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
        return $this->hasMany(CandidatePromise::class);
    }

    public function running_candidate() {
        return $this->hasOne(RunningCandidates::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * If they are on a ballot, but have filled out multiple opinion stances and have 
     * multiple badges, need to only get their badges for that ballot and opinion type
     */
    public function badges() {
        //Get the ballot if it exists
        if($this->ballot) {
            //Get the opinion type from that ballot
            $opinion_type_id = $this->ballot->location->opinion_type_id;
        } else {
            $opinion_type_id = 1;
        }

        //Get the ballot, filter by the opinion type
        $badges = $this->hasManyThrough(Badge::class, CandidateBadge::class, 'candidate_id', 'id', 'id', 'badge_id')->whereHas('opinion', function($query) use ($opinion_type_id)
        {
            $query->where('type_id', $opinion_type_id);
        });
        return $badges;
    }
}
