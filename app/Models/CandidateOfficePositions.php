<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateOfficePositions extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'candidate_id';
    public $incrementing = false;

    protected $guarded = [
        "candidate_id",
        "office_id",
        "location_id",
        "location_type",
    ];

    protected $fillable = [
        "year_start",
        "year_end",
    ];

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'office_id');
    }
}
