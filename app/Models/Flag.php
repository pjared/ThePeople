<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    use HasFactory;

    protected $timestamps = false;

    protected $fillable = [
        'user_id',
        'candidate_id',
        'ballot_id',
        'flag_type', //Red, Green, Nuetral
        'note', //The note the user includes
    ];

    public function flaggable()
    {
        return $this->morphTo();
    }
}
