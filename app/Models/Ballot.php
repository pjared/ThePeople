<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = [
        "location_id",
        "position_of_office_id",
        "voting_date"
    ];
}
