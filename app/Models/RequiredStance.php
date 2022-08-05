<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequiredStance extends Model
{
    use HasFactory;

    public $fillable = [
        'controversial_opinion_id',
        'label',
        'description',
    ];
}
