<?php

namespace App\Models;

use App\Traits\Flaggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateOpinion extends Model
{
    use SoftDeletes;
    use Flaggable;
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'name',
        'stance',
        'order',
    ];

}
