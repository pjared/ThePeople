<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'school_name',
        'degree_field',
        'degree_type',
        'year_start',
        'year_end',
    ];
}
