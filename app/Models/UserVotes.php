<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserVotes extends Pivot
{
    use HasFactory;

    protected $table = 'user_votes';

    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "ballot_id",
        "running_candidate_id",
        "is_valid",
    ];
}
