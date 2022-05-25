<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PoliticanOfficePositions extends Pivot
{
    public $timestamps = false;

    protected $primaryKey = 'politician_id';
    public $incrementing = false;

    protected $guarded = [
        "politician_id",
        "public_office_id",
        "location_id",
        "location_type",
    ];

    protected $fillable = [
        "year_start",
        "year_end",
    ];

    use HasFactory;
}
