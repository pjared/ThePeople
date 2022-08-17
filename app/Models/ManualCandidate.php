<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManualCandidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'candidate_id';
    public $incrementing = false;

    protected $fillable = [
        'candidate_id',
        'note',
        'sources',
    ];
}
