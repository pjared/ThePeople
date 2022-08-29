<?php

namespace App\Models;

use BeyondCode\Comments\Traits\HasComments;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Scout\Searchable;
/**
 * A candidate is someone currently running for office.
 */
class Candidate extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    use HasComments;
    use HasProfilePhoto;
    use Searchable;

    protected $fillable = [
        "name",
        "dob",
        "bio",
        "contact_email",
        "contact_phone_number",
        "email",
        "phone_number",
        'state',
        "signup_date",
        "user_id",
        "party_name",
        'site_link',
        'slug',
    ];

    protected $hidden = [
        // "contact_email",
        "contact_phone_number",
        // "signup_date",
        "user_id",
        "party_name",
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function shouldBeSearchable()
    {
        return $this->running_candidate ? $this->running_candidate->show : false;
    }
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    /**
     * Overrides default implementation. Users are only able to update profile if they are a candidate
    *
     * @param  \Illuminate\Http\UploadedFile  $photo
     * @return void
     */
    public function updateProfilePhoto(UploadedFile $photo)
    {
        if(auth()->user()->hasRole('candidate')) {
            tap($this->profile_photo_path, function ($previous) use ($photo) {
                $this->forceFill([
                    'profile_photo_path' => $photo->storePublicly(
                        'profile-photos', ['disk' => $this->profilePhotoDisk()]
                    ),
                ])->save();

                if ($previous) {
                    Storage::disk($this->profilePhotoDisk())->delete($previous);
                }
            });
        }
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'ballot.name']
            ]
        ];
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

    public function required_stances() {
        return $this->hasMany(CandidateRequiredStance::class);
    }

    public function opinion_stances($opinion_id) {
        return $this->hasMany(CandidateStance::class)->where('controversial_opinion_id', $opinion_id)->get();
    }

    public function opinions() {
        return $this->hasMany(CandidateOpinion::class);
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

    public function manual_candidate() {
        return $this->hasOne(ManualCandidate::class);
    }

    public function photos() {
        return $this->hasMany(CandidatePhoto::class, 'candidate_id');
    }

    public function events() {
        return $this->hasMany(CandidateEvent::class, 'candidate_id');
    }

    /**
     * If they are on a ballot, but have filled out multiple opinion stances and have
     * multiple badges, need to only get their badges for that ballot and opinion type
     */
    public function badges() {

        return $this->hasManyThrough(Badge::class, CandidateBadge::class, 'candidate_id', 'id', 'id', 'badge_id')->whereHas('opinion');

        //Get the ballot if it exists
        // if($this->ballot) {
        //     //Get the opinion type from that ballot
        //     $opinion_type_id = $this->ballot->location->opinion_type_id;
        // } else {
        //     $opinion_type_id = 1;
        // }

        // //Get the ballot, filter by the opinion type
        // $badges = $this->hasManyThrough(Badge::class, CandidateBadge::class, 'candidate_id', 'id', 'id', 'badge_id')->whereHas('opinion', function($query) use ($opinion_type_id)
        // {
        //     $query->where('type_id', $opinion_type_id);
        // });
        // return $badges;
    }
}
