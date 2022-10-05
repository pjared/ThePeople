<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserVotes extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'user_votes';
    protected $fillable = [
        'user_id',
        'ballot_id',
        'candidate_id',
        'is_valid',
    ];

    public function ballot() {
        return $this->belongsTo(Ballot::class, 'ballot_id');
    }

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
