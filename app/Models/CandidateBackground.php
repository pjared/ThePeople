<?php

namespace App\Models;

use App\Traits\Flaggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateBackground extends Model
{
    use HasFactory;
    use Flaggable;

    protected $fillable = [
        'candidate_id',
        'name',
        'description',
        'year_start',
        'year_end',
    ];
}
