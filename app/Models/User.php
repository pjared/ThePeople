<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser, HasAvatar
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'state',
        'last_visited',
        'voter_precinct'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Overrides default implementation. Users are only able to update profile if they are a candidate
    *
     * @param  \Illuminate\Http\UploadedFile  $photo
     * @return void
     */
    public function updateProfilePhoto(UploadedFile $photo)
    {
        if($this->hasRole('candidate')) {
            tap($this->profile_photo_path, function ($previous) use ($photo) {
                $this->forceFill([
                    'profile_photo_path' => $photo->storePublicly(
                        'profile-photos', ['disk' => $this->profilePhotoDisk()]
                    ),
                ])->save();

                if ($previous) {
                    Storage::disk($this->profilePhotoDisk())->delete($previous);
                }
            });
        }
    }

    public function votes() {
        return $this->hasMany(UserVotes::class, 'user_id');
    }

    public function voted_ballots() {
        return $this->hasManyThrough(Ballot::class, UserVotes::class, 'ballot_id', 'id', 'id', 'user_id');
    }

    public function manages_political_groups() {
        return $this->hasManyThrough(PoliticalGroup::class, GroupOrganizer::class, 'political_group_id', 'id', 'id', 'user_id');
    }

    public function candidateApplication() {
        return $this->hasOne(CandidateApplication::class, 'user_id', 'id');
    }

    public function candidate() {
        return $this->hasOne(Candidate::class, 'user_id', 'id');
    }

    public function flags() {
        return $this->hasMany(Flag::class, 'user_id');
    }

    /**
     * Contract of whether or not the user can access the filament admin panel
     */
    public function canAccessFilament(): bool
    {
        return $this->hasRole('admin') || $this->hasRole('candidate');
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->getProfilePhotoUrlAttribute();
    }
}
