<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserVotes extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $guarded = [
        "user_id",
        "ballot_id",
    ];

    protected $fillable = [
        "running_candidate_id",
    ];
}
