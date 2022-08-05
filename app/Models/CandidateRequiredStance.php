<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateRequiredStance extends Model
{
    use HasFactory;

    public $fillable = [
        'required_stance_id',
        'candidate_id',
        'candidate_reasoning',
    ];
}
