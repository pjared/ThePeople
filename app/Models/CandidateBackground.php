<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'name',
        'description',
        'year_start',
        'year_end',
    ];
}
