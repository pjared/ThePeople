<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\GroupBallotQuestions;
use App\Models\PoliticalGroupCandidates;
use App\Models\UserVotes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowBallot extends Component
{
    public Ballot $ballot;
    public $candidates = [];
    public $candidates_loaded = false;
    public $candidate_vote;

    public function mount(Ballot $ballot)
    {
        if(Auth::user()) {
            $user_vote = UserVotes::where('ballot_id', $ballot->id)->where('user_id', Auth::id())->first();
            if($user_vote) {
                $this->candidate_vote = $user_vote->running_candidate_id;
            }
        }
        $this->ballot = $ballot->load('location:id,name,state', 'office:id,name', 'candidates', 'candidates.candidate');
    }

    public function load_candidates()
    {
        $this->candidates = $this->ballot->candidates;
        $this->candidates_loaded = true;
    }

    public function change_user_vote($candidate_id)
    {
        if(!auth()) {
            return;
        }
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
        return view('livewire.ballot.show-ballot');
    }
}
