<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateStance extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'controversial_opinion_id',
        'value', // The value for the range
        'info', //Why this stance was picked
        'link', //link to article (if they didn't fill themselves)
    ];

    public function opinion() {
        return $this->belongsTo(ControversialOpinion::class, 'controversial_opinion_id');
    }
}
