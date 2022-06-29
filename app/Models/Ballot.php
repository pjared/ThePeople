<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public $fillable = [
        "location_id",
        "office_id",
        "voting_date"
    ];

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'office_id');
    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id')->where('show', true);;
    }
    
    public function all_candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id');
    }
}
