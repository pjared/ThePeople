<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualCandidate extends Model
{
    use HasFactory;

    protected $primaryKey = 'candidate_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'note',
        'sources',
    ];
}
