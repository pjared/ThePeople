<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticalParty extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        "name",
        "other_info" // an xml/json of other stuff
    ];
    use HasFactory;
}
