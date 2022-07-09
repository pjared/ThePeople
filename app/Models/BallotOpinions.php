<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BallotOpinions extends Pivot
{
    public $timestamps = false;

    public $fillable = [
        'ballot_id',
        'opinion_id',
    ]; 
}
