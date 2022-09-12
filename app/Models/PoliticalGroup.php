<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\HasProfilePhoto;

class PoliticalGroup extends Model
{
    use HasFactory;
    use Sluggable, SluggableScopeHelpers;
    use HasProfilePhoto;
    use SoftDeletes;

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
        'can_back_candidates',
        'sentence_overview',
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

    public function getFullBadgeUrlAttribute()
    {
        return $this->badge_url
                    ? Storage::disk('public')->url($this->badge_url) : null;
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
