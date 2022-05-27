<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControversialOpinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description', // A description of what it means
        'new',
    ];
}
