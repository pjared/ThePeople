<?php

namespace App\Policies;

use App\Models\CandidateOfficePositions;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidateOfficePositionsPolicy
{
    use HandlesAuthorization;

    /**
     * This will first do a check if this is an admin editing a manual candidate.
     * If that doesn't pass, then we will make sure that it's the actual candidate that's editing the model
     *
     *  */
    private function checkAdminAndCandidate($user, $candidate_id) :bool
    {
        //If it's an admin
        if($user->hasRole('admin')) {
            //If the candidate is a manual candidate
            //This is commented out right now since model DNE
            // if(Candidate::where('id', $campaignVideo->candidate_id)->manual_candidate) {
                // return true;
            // }
            return true;
        }

        //Check if the user is a candidate (or admin for manual candidates)
        if(!$user->hasRole('candidate')) {
            return false;
        }
        //If the user is somehow a candidate role but doesn't have a candidate model
        if(!$user->candidate) {
            return false;
        }
        //Finally, lets check if they
        if($user->candidate->id != $candidate_id) {
            return false;
        }
        return true;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        if($user->hasRole('admin') || $user->hasRole('candidate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateOfficePositions  $candidateOfficePositions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CandidateOfficePositions $candidateOfficePositions)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if($user->hasRole('admin') || $user->hasRole('candidate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateOfficePositions  $candidateOfficePositions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CandidateOfficePositions $candidateOfficePositions)
    {
        return $this->checkAdminAndCandidate($user, $candidateOfficePositions->candidate_id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateOfficePositions  $candidateOfficePositions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CandidateOfficePositions $candidateOfficePositions)
    {
        return $this->checkAdminAndCandidate($user, $candidateOfficePositions->candidate_id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateOfficePositions  $candidateOfficePositions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CandidateOfficePositions $candidateOfficePositions)
    {
        return $this->checkAdminAndCandidate($user, $candidateOfficePositions->candidate_id);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CandidateOfficePositions  $candidateOfficePositions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CandidateOfficePositions $candidateOfficePositions)
    {
        return false;
    }
}
