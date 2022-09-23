<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\UserVotes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FlagComparison extends Component
{
    public $flags;
    public $candidates;
    public $candidate_vote;
    public $opinions;
    public $ballot_slug;

    public function render()
    {
        return view('livewire.ballot.flag-comparison');
    }

    public function mount(Ballot $ballot){
        $this->ballot_slug = $ballot->slug;
        // Get the user's vote
        $user_vote = UserVotes::where('ballot_id', $ballot->id)->where('user_id', auth()->id())->first();
        if($user_vote) {
            $this->candidate_vote = $user_vote->candidate_id;
        }

        //Get the user's flags, eager load the flagged item
        $this->flags = auth()->user()->flags->where('ballot_id', $ballot->id)
                                                ->load('flaggable');

        //Get the candidate
        $this->candidates = Candidate::where('ballot_id', $ballot->id)
                                        ->where('show', true)
                                        ->get();

        //Call a sort method to order the candidates by most flags
        $this->sort_candidates();

        //Get the opinions of the ballot
        $this->opinions = $ballot->opinions;
    }

    private function sort_candidates()
    {
        //Get an assosiative array of candidate ID and count of flags for candidate_id
        $flag_candidate_count = [];
        foreach($this->candidates as $candidate) {
            $flag_candidate_count[$candidate->id] = count($this->flags->where('candidate_id', $candidate->id));
        }
        //Sort the array, descending order
        arsort($flag_candidate_count);

        //Call a method to resort the original candidates list based on keys
        $this->candidates = $this->candidates->sortBy( function($item, $key) use ($flag_candidate_count) {
            return array_search($item->id, array_keys($flag_candidate_count));
        });
    }

    public function getBallotProperty()
    {
        return Cache::get('ballot-' . $this->ballot_slug);
    }

    public function change_user_vote($candidate_id)
    {
        if(!auth()) {
            return;
        }
        //Validate the incoming data
        Validator::make(
            ['candidate_slug' => $candidate_id],
            ['candidate_slug' => 'required|int'],
        )->validate();

        UserVotes::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'ballot_id' => $this->ballot->id,
            ],
            [
                'candidate_id' => $candidate_id,
                'is_valid' => 1,
            ]
        );
    }
}
