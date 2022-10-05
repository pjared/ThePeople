<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * This class is a failsafe for giving out links candidates. I'm assuming I will make a lot of refactoring changes
 * as the website moves to production and I hire real web developers. And if the database with ID's is not properly
 * migrated we will have an issue with all of the QR codes.
 */
class CandidatePermaLink extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    protected $primaryKey = 'candidate_id';
    protected $fillable = [
        'candidate_id',
        'perma_link',
        'candidate_link',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
