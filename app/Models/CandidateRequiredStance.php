<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateRequiredStance extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    public $fillable = [
        'required_stance_id',
        'candidate_id',
        'candidate_reasoning',
    ];

    public function required_stance() {
        return $this->belongsTo(RequiredStance::class, 'required_stance_id');
    }
}
