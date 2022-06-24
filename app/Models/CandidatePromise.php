<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePromise extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $incrementing = false;
    protected $primaryKey = 'candidate_id';

    protected $fillable = [
        'candidate_id',
        'promise',
        'plan',
        'order',
    ];
}
