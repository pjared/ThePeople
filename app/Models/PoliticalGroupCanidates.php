<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PoliticalGroupCanidates extends Pivot
{
    protected $fillable = [
        'candidate_id',
        'political_group_id',
    ];
}
