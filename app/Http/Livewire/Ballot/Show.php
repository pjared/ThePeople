<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\UserVotes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public Ballot $ballot;

    public $candidate_vote;

    public function mount($ballot)
    {
        if(Auth::user()) {
            $user_vote = UserVotes::where('ballot_id', $ballot->id)->where('user_id', Auth::id())->first();
            if($user_vote) {
                $this->candidate_vote = $user_vote->running_candidate_id;
            }
        }
        $this->ballot = $ballot;
    }

    public function change_user_vote($candidate_id)
    {
        //TODO: auth check needed or already handled in the view?
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
        return view('livewire.ballot.show');
    }
}
