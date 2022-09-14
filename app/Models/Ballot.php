<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;

class Ballot extends Model
{
    use HasFactory;
    use Sluggable;
    use Searchable;

    public $timestamps = false;

    protected $casts = [
        'voting_date' => 'datetime',
        'has_single_runner' => 'boolean'
    ];

    public $fillable = [
        "location_id",
        "office_id",
        "voting_date",
        'slug',
        'has_single_runner',
    ];

    public function shouldBeSearchable()
    {
        return count($this->candidates) >= 1;
    }
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
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
                'source' => ['location.name', 'office.name']
            ]
        ];
    }

    // TODO: Too dumb to figure this out right now.
    // protected $appends = [
    //     'name',
    // ];

    // protected function name(): Attribute {
    //     return Attribute::make(
    //         get: fn () => $this->office->name + ', ' + $this->location->name,
    //     );
    // }

    public function getNameAttribute() {
        return $this->location->name . ' ' . $this->office->name;
    }

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'office_id');
    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id')->where('show', true)->orderBy('order');
    }

    public function all_candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id');
    }

    public function opinions() {
        return $this->belongsToMany(ControversialOpinion::class, 'ballot_opinion');
    }
}
