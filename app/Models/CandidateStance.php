<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateStance extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;

    protected $primaryKey = 'candidate_id';

    protected $fillable = [
        'candidate_id', // A description of what it means
        'controversial_stance_id',
        'controversial_opinion_id',
        'info', //Why this stance was picked
        'link', //link to article
    ];

    public function stance() {
        return $this->belongsTo(ControversialStance::class, 'controversial_stance_id');
    }

    public function opinion() {
        return $this->belongsTo(ControversialOpinion::class, 'controversial_opinion_id');
    }
}
