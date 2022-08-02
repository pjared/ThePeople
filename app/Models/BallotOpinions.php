<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BallotOpinions extends Pivot
{
    public $timestamps = false;

    public $fillable = [
        'ballot_id',
        'controversial_opinion_id',
    ];

    public function controversial_opinion()
    {
        return $this->belongsTo(ControversialOpinion::class, 'controversial_opinion_id');
    }
}
