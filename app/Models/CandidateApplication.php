<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateApplication extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'name',
        'dob',
        'email',
        'phone_number',
        'office_name',
        'state',
        'location',
        'status',
        'candidate_id',
        'entered_race_date',
    ];
}
