<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatePhoto extends Pivot
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;

    protected $fillable = [
        'candidate_id',
        'photo_url',
        'order',
    ];

    protected $casts = [
        'attachments' => 'array',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
