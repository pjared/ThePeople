<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CandidateBadge extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'candiate_id',
        'badge_id'
    ];
}
