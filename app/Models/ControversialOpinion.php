<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControversialOpinion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description', // A description of what it means
        'votes',
    ];

    public function required_stances() {
        return $this->hasMany(RequiredStance::class, 'controversial_opinion_id');
    }
}
