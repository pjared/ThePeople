<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEvent extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'event_name',
        'event_location',
        'event_description',
    ];
}
