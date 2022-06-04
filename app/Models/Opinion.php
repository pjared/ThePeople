<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        "candidate_id",
        "name",
        "stance",
        "link",
    ];
    use HasFactory;
}
