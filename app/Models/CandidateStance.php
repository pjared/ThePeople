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
        'stance_label', // The name for their stance
        'stance_reasoning', // Their reasoning behind it
    ];

    public function opinion() {
        return $this->belongsTo(ControversialOpinion::class, 'controversial_opinion_id');
    }
}
