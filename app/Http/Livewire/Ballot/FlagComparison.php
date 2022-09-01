<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\UserVotes;
use Livewire\Component;

class FlagComparison extends Component
{
    public $flags;
    public $candidates;
    public $candidate_vote;
    public $opinions;

    public function render()
    {
        return view('livewire.ballot.flag-comparison');
    }

    public function mount(Ballot $ballot){
        //TODO: load ballot candidates with info
        // $ballot = $ballot->load('')

        // Get the user's vote
        $user_vote = UserVotes::where('ballot_id', $ballot->id)->where('user_id', auth()->id())->first();
        if($user_vote) {
            $this->candidate_vote = $user_vote->running_candidate_id;
        }

        $this->flags = auth()->user()->flags->where('ballot_id', $ballot->id)->load('flaggable');
        $this->candidates = Candidate::whereRelation('running_candidate', 'ballot_id', $ballot->id)
                                        ->whereRelation('running_candidate','show', true)
                                        ->with(['stances', 'required_stances'])
                                        ->get();
        $this->opinions = $ballot->opinions;
    }
}
