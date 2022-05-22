<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        "name",
        "candidate_id",
        "politician_id",
        "article_link",
        "is_controversial",
    ];
    use HasFactory;
}
