<?php

namespace App\Traits;

use App\Models\Flag;
use Illuminate\Database\Eloquent\Model;

trait Flaggable
{
    /**
     * Return all flags for this model.
     *
     * @return MorphMany
     */
    public function flags()
    {
        return $this->morphMany(Flag::class, 'flaggable');
    }

    public function temp_flag() {
        return [
            'flaggable_id' => $this->getKey(),
            'flaggable_type' => get_class()
        ];
    }

    /**
     * Attach a comment to this model.
     *
     * @param string $note
     * @param $candidate_id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function flag(string $note, $flag_type, $candidate_id, $ballot_id) //, $candidate_id, $ballot_id
    {
        return $this->flagAsUser(auth()->user(), $note, $flag_type, $candidate_id, $ballot_id);
    }

    /**
     * Attach a flag to this model as a specific user.
     *
     * @param Model|null $user
     * @param string $comment
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function flagAsUser(?Model $user, string $note, $flag_type, $candidate_id, $ballot_id) //, $candidate_id, $ballot_id
    {
        $flag = new Flag([
            'user_id' => is_null($user) ? null : $user->getKey(),
            'candidate_id' => $candidate_id,
            'ballot_id' => $ballot_id,
            'note' => $note,
            'flaggable_id' => $this->getKey(),
            'flaggable_type' => get_class(),
            'flag_type' => $flag_type
        ]);

        return $this->flags()->save($flag);
    }

}
