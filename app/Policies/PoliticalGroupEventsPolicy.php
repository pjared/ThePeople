<?php

namespace App\Policies;

use App\Models\PoliticalGroupEvents;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PoliticalGroupEventsPolicy
{
    use HandlesAuthorization;

    public function is_in_group(User $user, $political_group_id)
    {
        //Just go through the users groups and see if it contains
        foreach($user->manages_political_groups as $group) {
            if($group->id == $political_group_id) {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasRole('organizer') || $user->hasRole('organizerAdmin');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroupEvents  $politicalGroupEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PoliticalGroupEvents $politicalGroupEvents)
    {
        return $this->is_in_group($user, $politicalGroupEvents->id) && ($user->hasRole('organizer') || $user->hasRole('organizerAdmin'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasRole('organizer') || $user->hasRole('organizerAdmin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroupEvents  $politicalGroupEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PoliticalGroupEvents $politicalGroupEvents)
    {
        return $this->is_in_group($user, $politicalGroupEvents->id) && ($user->hasRole('organizer') || $user->hasRole('organizerAdmin'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroupEvents  $politicalGroupEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PoliticalGroupEvents $politicalGroupEvents)
    {
        return $this->is_in_group($user, $politicalGroupEvents->id) && ($user->hasRole('organizer') || $user->hasRole('organizerAdmin'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroupEvents  $politicalGroupEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PoliticalGroupEvents $politicalGroupEvents)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroupEvents  $politicalGroupEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PoliticalGroupEvents $politicalGroupEvents)
    {
        return $user->hasRole('admin');
    }
}
