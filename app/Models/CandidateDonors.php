<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CandidateDonors extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'candidate_id';
    public $incrementing = false;

    protected $guarded = [
        "candidate_id",
        "donor_id",
    ];
}
