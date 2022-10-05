<?php

namespace App\Http\Livewire\Groups;

use App\Models\Ballot;
use App\Models\GroupBallotQuestions;
use App\Models\PoliticalGroupCandidates;
use Livewire\Component;

class GroupBallot extends Component
{
    public Ballot $ballot;
    public $group_question;
    public $backed_candidate;

    public function mount(Ballot $ballot)
    {
        $this->ballot = $ballot;
        if(auth()->user()->manages_political_groups->first()) {
            $group_candidate = PoliticalGroupCandidates::where('political_group_id', auth()->user()->manages_political_groups->first()->id)->firstWhere('ballot_id', $ballot->id);
            if($group_candidate) {
                $this->backed_candidate = $group_candidate->candidate_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.groups.group-ballot');
    }

    public function change_backing() {
        PoliticalGroupCandidates::updateOrCreate(
            [
                'political_group_id' => auth()->user()->manages_political_groups->first()->id,
                'ballot_id' => $this->ballot->id,
                'candidate_id' => $this->backed_candidate,
            ]
            );

    }

    public function remove_backing()
    {
        $candidate = PoliticalGroupCandidates::where('political_group_id', auth()->user()->manages_political_groups->first()->id)
                                    ->firstWhere('ballot_id', $this->ballot->id);
        if($candidate) {
            $candidate->delete();
        }
        $this->backed_candidate = '';
    }

    public function add_question() {
        if(auth()->user() && auth()->user()->hasRole('organizerAdmin')) {
            //Check the users group
            $user_group = auth()->user()->manages_political_groups->first();
            if(! $user_group) {
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

}
