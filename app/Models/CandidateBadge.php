<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CandidateBadge extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'candidate_badges';

    public $fillable = [
        'candidate_id',
        'badge_id',
        'opinion_id',
    ];
}
