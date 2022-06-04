<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControversialStance extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'controversial_opinion_id',
        'description',
    ];

    public function opinion() {
        return $this->belongsTo(ControversialOpinion::class, 'controversial_opinion_id');
    }
}
