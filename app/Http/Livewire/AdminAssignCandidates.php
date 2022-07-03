<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\RunningCandidates;
use Livewire\Component;

class AdminAssignCandidates extends Component
{
    public $candidates;
    public $placed_candidates;
    public $ballots;

    public $new_ballot_id;

    protected $rules = [
        'placed_candidates.*.running_candidate.ballot_id' => 'required',
    ];

    public function assignCandidate($candidate_id)
    {
        // Attempt to find the ballot
        // $ballot = Ballot::where('office_id', $this->office_id)->where('location_id', $this->location_id)->first();
        $ballot = Ballot::find($this->new_ballot_id);

        //Return if we don't find a ballot
        if(!$ballot) {
            session()->flash('error', 'Could not find this ballot');
            return;
        }

        //Add to the ballot
        $running_candidate = new RunningCandidates();
        $running_candidate->candidate_id = $candidate_id;
        $running_candidate->ballot_id = $ballot->id;
        $running_candidate->save();

        session()->flash('message', 'Candidate has been added to ballot');
    }

    // public function updateBallotAssignment()
    // {
    //     dd("um");

    //     $this->validate();

 

    //     foreach ($this->placed_candidates as $post) {

    //         $post->save();

    //     }

    //     $ballot = Ballot::find($this->ballot_id);

    //     //Return if we don't find a ballot
    //     if(!$ballot) {
    //         session()->flash('error', 'Could not find this ballot');
    //         return;
    //     }

    //     //Add to the ballot
    //     $running_candidate = RunningCandidates::firstWhere('candidate_id', $candidate_id);
    //     $running_candidate->ballot_id = $ballot->id;
    //     $running_candidate->save();

    //     session()->flash('message', 'Candidate has been added to ballot');
    // }

    public function mount() {
        $this->ballots = Ballot::all();
    }

    public function render()
    {
        $this->candidates = Candidate::doesntHave('ballot')->get();
        $this->placed_candidates = Candidate::has('ballot')->get();
        return view('livewire.admin-assign-candidates');
    }
}
