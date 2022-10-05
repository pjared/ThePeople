<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManualCandidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $incrementing = false;

    protected $primaryKey = 'candidate_id';
    protected $fillable = [
        'candidate_id',
        'note',
        'sources',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    // protected $casts = [
    //     'sources' => 'array',
    // ];
}
