<?php

namespace App\Models;

use App\Traits\Flaggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateStance extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Flaggable;

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
