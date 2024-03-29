<?php

namespace App\Models;

use App\Traits\Flaggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;
    use Flaggable;

    protected $fillable = [
        'candidate_id',
        'school_name',
        'degree_field',
        'degree_type',
        'year_received',
    ];
}
