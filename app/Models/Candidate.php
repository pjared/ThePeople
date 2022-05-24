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
        "position_of_office_id", //The position they are running for
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
        return $this->belongsToMany(Donor::class)->using(CandidateDonor::class);
    }
}
