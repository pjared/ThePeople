<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class PoliticalGroup extends Model
{
    use HasFactory;
    use Sluggable, SluggableScopeHelpers;
    use HasProfilePhoto;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'location_id',
        'description',
        'contact_email',
        'email',
        'phone',
        'site_link',
        'badge_url',
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
                'source' => ['name']
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function events() {
        return $this->hasMany(PoliticalGroupEvents::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
