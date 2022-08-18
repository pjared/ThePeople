<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateOpinion extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        "candidate_id",
        "name",
        "stance",
    ];
    use HasFactory;
}