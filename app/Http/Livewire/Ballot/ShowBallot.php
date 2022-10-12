<?php

namespace App\Http\Livewire\Ballot;

use App\Models\UserVotes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ShowBallot extends Component
{
    // public Ballot $ballot;
    public $ballot_slug;
    public $candidate_vote;

    public $page_loaded = false;

    public function mount($ballot_slug)
    {
        $this->ballot_slug = $ballot_slug;
        if($this->user_vote) {
            $this->candidate_vote = $this->user_vote->candidate_id;
        }
    }

    public function getUserVoteProperty()
    {
        if(auth()->check()) {
            return UserVotes::where('ballot_id', $this->ballot->id)->where('user_id', auth()->id())->first();
        } else {
            return false;
        }
    }

    public function render()
    {
        return view('livewire.ballot.show-ballot');
    }

    public function getBallotProperty()
    {
        return Cache::get('ballot-' . $this->ballot_slug);
    }

    public function change_user_vote($candidate_id)
    {
        if(! Auth()) {
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
            ],
        );
    }

    public function init()
    {
        $this->page_loaded = true;
    }
}
