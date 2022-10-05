<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatePhoto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'attachment',
        'order',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
