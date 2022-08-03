<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFlag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'user_id',
        'candidate_id',
        'ballot_id',
        'type', // Promise, Donor, etc.
        'type_id', // The id of the promise, donor, etc.
        'flag_type', //Red, Green, Nuetral
        'note', //The note the user includes
    ];
}
