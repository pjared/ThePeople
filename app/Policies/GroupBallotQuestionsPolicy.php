<?php

namespace App\Policies;

use App\Models\GroupBallotQuestions;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupBallotQuestionsPolicy
{
    use HandlesAuthorization;

    public function is_in_group(User $user, $politicalGroupCandidates_id)
    {
        //Just go through the users groups and see if it contains
        foreach($user->manages_political_groups as $group) {
            if($group->id == $politicalGroupCandidates_id) {
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
     * @param  \App\Models\GroupBallotQuestions  $groupBallotQuestions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, GroupBallotQuestions $groupBallotQuestions)
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
        return $user->hasRole('organizer') || $user->hasRole('organizerAdmin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GroupBallotQuestions  $groupBallotQuestions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, GroupBallotQuestions $groupBallotQuestions)
    {
        return $this->is_in_group($user, $groupBallotQuestions->poltical_group_id) && ($user->hasRole('organizer') || $user->hasRole('organizerAdmin'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GroupBallotQuestions  $groupBallotQuestions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, GroupBallotQuestions $groupBallotQuestions)
    {
        if($user->hasRole('admin')) {
            return true;
        }
        return $this->is_in_group($user, $groupBallotQuestions->poltical_group_id) && ($user->hasRole('organizer') || $user->hasRole('organizerAdmin'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GroupBallotQuestions  $groupBallotQuestions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, GroupBallotQuestions $groupBallotQuestions)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GroupBallotQuestions  $groupBallotQuestions
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, GroupBallotQuestions $groupBallotQuestions)
    {
        return $user->hasRole('admin');
    }
}
