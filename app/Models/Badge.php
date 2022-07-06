<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'name',
        'description',
        'opinion_id',
    ];
    
    public function opinion() {
        return $this->belongsTo(ControversialOpinion::class, 'opinion_id');
    }
}
