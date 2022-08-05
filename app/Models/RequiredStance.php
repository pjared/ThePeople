<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequiredStance extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'controversial_opinion_id',
        'label',
        'description',
    ];

    public function controversial_opinion() {
        return $this->belongsTo(ControversialOpinion::class);
    }
}
