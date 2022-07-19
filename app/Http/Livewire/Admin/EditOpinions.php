<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ballot;
use App\Models\BallotOpinions;
use App\Models\ControversialOpinion;
use App\Models\Location;
use Livewire\Component;

class EditOpinions extends Component
{
    public $opinions;
    public $ballots;
    public BallotOpinions $new_ballot_opinion;

    protected $rules = [
        'new_ballot_opinion.controversial_opinion_id' => 'required',
        'new_ballot_opinion.ballot_id' => 'required',
    ];

    public function add_ballot_opinion() {
        $this->validate();
        $this->new_ballot_opinion->save();
    }

    public function mount()
    {
        $this->opinions = ControversialOpinion::all();
        $this->ballots = Ballot::all();
        $this->new_ballot_opinion = new BallotOpinions();
    }

    public function render()
    {   
        return view('livewire.admin.edit-opinions');
    }

    public function remove_ballot_opinion($ballot_id, $opinion_id)
    {
        BallotOpinions::firstWhere('ballot_id', $ballot_id)->where('controversial_opinion_id', $opinion_id)->delete();
    }
}
