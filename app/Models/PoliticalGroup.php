<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticalGroup extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name',
        'location_id',
        'description',
        'contact_email',
        'email',
        'phone',
        'site_link',
        'slug',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'ballot.name']
            ]
        ];
    }
}
