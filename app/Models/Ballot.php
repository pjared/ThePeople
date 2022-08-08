<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'voting_date' => 'datetime',
    ];

    public $fillable = [
        "location_id",
        "office_id",
        "voting_date"
    ];

    // TODO: Too dumb to figure this out right now.
    // protected $appends = [
    //     'name',
    // ];

    // protected function name(): Attribute {
    //     return Attribute::make(
    //         get: fn () => $this->office->name + ', ' + $this->location->name,
    //     );
    // }

    // public function getNameAttribute() {
    //     return $this->office->name + ', ' + $this->location->name;
    // }

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'office_id');
    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id')->where('show', true);
    }

    public function all_candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id');
    }

    public function opinions() {
        return $this->belongsToMany(ControversialOpinion::class, 'ballot_opinion');
    }
}
