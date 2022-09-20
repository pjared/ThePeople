<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BallotPrecinct extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'precinct_id',
        'ballot_id',
    ];

    public function ballot() {
        return $this->belongsTo(Ballot::class, 'ballot_id');
    }
}
