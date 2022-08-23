<?php

namespace App\Policies;

use App\Models\PoliticalGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PoliticalGroupPolicy
{
    use HandlesAuthorization;

    public function is_in_group(User $user, PoliticalGroup $politicalGroup)
    {
        //Just go through the users groups and see if it contains
        foreach($user->manages_political_groups as $group) {
            if($group->id == $politicalGroup->id) {
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
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroup  $politicalGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PoliticalGroup $politicalGroup)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroup  $politicalGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PoliticalGroup $politicalGroup)
    {
        return $user->hasRole('admin') || ($user->hasRole('organizerAdmin') && $this->is_in_group($user, $politicalGroup));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroup  $politicalGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PoliticalGroup $politicalGroup)
    {
        return $user->hasRole('admin') || $user->hasRole('organizerAdmin') && $this->is_in_group($user, $politicalGroup);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroup  $politicalGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PoliticalGroup $politicalGroup)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PoliticalGroup  $politicalGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PoliticalGroup $politicalGroup)
    {
        //
    }
}
