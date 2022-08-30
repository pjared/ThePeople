<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoliticalGroupCandidates extends Pivot
{
    use SoftDeletes;

    protected $fillable = [
        'candidate_id',
        'political_group_id',
        'ballot_id'
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
