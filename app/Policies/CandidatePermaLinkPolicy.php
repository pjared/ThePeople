<?php

namespace App\Policies;

use App\Models\CandidatePermaLink;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidatePermaLinkPolicy
{
    use HandlesAuthorization;

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
     * @param  \App\Models\CandidatePermaLink  $candidatePermaLink
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CandidatePermaLink $candidatePermaLink)
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
     * @param  \App\Models\CandidatePermaLink  $candidatePermaLink
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CandidatePermaLink $candidatePermaLink)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidatePermaLink  $candidatePermaLink
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CandidatePermaLink $candidatePermaLink)
    {
        //
    }
    public function deleteAny(User $user)
    {
        return $user->hasRole('admin');
    }


    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidatePermaLink  $candidatePermaLink
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CandidatePermaLink $candidatePermaLink)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidatePermaLink  $candidatePermaLink
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CandidatePermaLink $candidatePermaLink)
    {
        return false;
    }
}
