<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateDonors extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'candidate_donor';

    protected $guarded = [
        'candidate_id',
        'top_5_donors',
        'top_5_states',
        'top_5_groups',
        'total',
    ];

    protected $casts = [
        'top_5_donors' => 'array',
        'top_5_states' => 'array',
        'top_5_groups' => 'array',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
