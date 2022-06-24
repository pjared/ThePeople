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
        "position_name"
    ];

    protected $fillable = [
        "year_start",
        "year_end",
        "description",
    ];

    public function office() {
        return $this->belongsTo(PublicOfficePosition::class, 'office_id');
    }
}
