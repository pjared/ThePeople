<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupApplication extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'description',
        "name",
        "email",
        "state",
        "location",
        "status",
        'group_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
