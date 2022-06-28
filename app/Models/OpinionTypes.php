<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionTypes extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    public $fillable =[
        'name',
        'description'
    ];
}