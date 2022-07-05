<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateOfficePositions extends Model
{
    use HasFactory;
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
