<?php

namespace App\Policies;

use App\Models\CandidateEducation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidateEducationPolicy
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
        return $user->hasRole('candidate');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateEducation  $candidateEducation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CandidateEducation $candidateEducation)
    {
        return $user->hasRole('candidate');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasRole('admin') || $user->hasRole('candidate');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateEducation  $candidateEducation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CandidateEducation $candidateEducation)
    {
        return $user->hasRole('admin') || $user->hasRole('candidate');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateEducation  $candidateEducation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CandidateEducation $candidateEducation)
    {
        return $user->hasRole('admin') || $user->hasRole('candidate');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateEducation  $candidateEducation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CandidateEducation $candidateEducation)
    {
        return $user->hasRole('admin') || $user->hasRole('candidate');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateEducation  $candidateEducation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CandidateEducation $candidateEducation)
    {
        return $user->hasRole('admin');
    }
}
