<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticianDonors extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'politician_id';
    public $incrementing = false;

    protected $guarded = [
        "politician_id",
        "donor_id",
    ];
}
