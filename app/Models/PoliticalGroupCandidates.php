<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PoliticalGroupCandidates extends Pivot
{
    protected $fillable = [
        'candidate_id',
        'political_group_id',
    ];
}
