<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'senate_not_voting',
        'senate_yeas',
        'senate_nays',
        'house_not_voting',
        'house_yeas',
        'house_nays',
        'senate_roll_link',
        'house_roll_link',
        'bill_id',
        'bill_link',
        'bill_status',
        'bill_title',
        'bill_summary',
    ];
}
