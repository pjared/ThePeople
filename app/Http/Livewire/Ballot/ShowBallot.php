<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\GroupBallotQuestions;
use App\Models\UserVotes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowBallot extends Component
{
    public Ballot $ballot;

    public $candidate_vote;
    public $group_question;

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

    public function add_question() {
        if(auth()->user() && auth()->user()->hasRole('organizerAdmin')) {
            //Check the users group
            $user_group = auth()->user()->manages_political_groups->first();
            if(!$user_group) {
                return;
            }
            //Create the new model
            $ballot_question = new GroupBallotQuestions();
            $ballot_question->ballot_id = $this->ballot->id;
            $ballot_question->political_group_id = $user_group->id;
            $ballot_question->question = $this->group_question;
            $ballot_question->save();
            //Reset the text
            $this->group_question = "";
        }
    }

    public function render()
    {
        return view('livewire.ballot.show-ballot');
    }
}
