<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupBallotQuestions extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'ballot_id',
        'political_group_id',
        'question',
    ];
}
