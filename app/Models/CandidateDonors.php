<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateDonors extends Pivot
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    protected $guarded = [
        "candidate_id",
        "donor_id",
    ];
}
