<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\UserVotes;
use Livewire\Component;

class BallotWire extends Component
{
    public Ballot $ballot;

    public function mount($ballot)
    {
        $this->ballot = $ballot;
    }

    public function change_user_vote($candidate_id)
    {
        UserVotes::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'ballot_id' => $this->ballot->id,
            ],
            [
                'running_candidate_id' => $candidate_id,
                'is_valid' => 1,
            ]
        );
    }

    public function render()
    {
        return view('livewire.ballot-wire');
    }
}
