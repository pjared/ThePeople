<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignVideo extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'candidate_id';
    public $incrementing = false;
    
    protected $fillable = [
        "candidate_id",
        "link",
    ];
    use HasFactory;
}
