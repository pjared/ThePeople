<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateOfficePositions extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        "candidate_id",
        "position_name",
        "year_start",
        "year_end",
        "description",
    ];

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'office_id');
    }
}
