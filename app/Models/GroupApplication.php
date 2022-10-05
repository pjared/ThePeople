<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupApplication extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'description',
        'name',
        'email',
        'state',
        'location',
        'status',
        'group_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
