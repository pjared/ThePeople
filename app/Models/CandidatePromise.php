<?php

namespace App\Models;

use App\Traits\Flaggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatePromise extends Model
{
    use HasFactory;
    use Flaggable;
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'promise',
        'plan',
        'order',
    ];
}
