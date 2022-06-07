<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = [
        "location_id",
        "public_office_id",
        "voting_date"
    ];

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'public_office_id');
    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function candidates() {
        return $this->hasMany(RunningCandidates::class, 'ballot_id');
    }
}
