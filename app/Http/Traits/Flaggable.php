<?php

use App\Models\Flag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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

    /**
     * Attach a comment to this model.
     *
     * @param string $note
     * @param $candidate_id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function flag($candidate_id, $ballot_id, string $note)
    {
        return $this->commentAsUser(auth()->user(), $note, $candidate_id, $ballot_id);
    }

    /**
     * Attach a flag to this model as a specific user.
     *
     * @param Model|null $user
     * @param string $comment
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function flagAsUser(?Model $user, string $note, $candidate_id, $ballot_id)
    {
        $flag = new Flag([
            'user_id' => is_null($user) ? null : $user->getKey(),
            'candidate_id' => $candidate_id,
            'ballot_id' => $ballot_id,
            'note' => $note,
            'flaggable_id' => $this->getKey(),
            'flaggable_type' => get_class(),
        ]);

        return $this->flags()->save($flag);
    }

}
