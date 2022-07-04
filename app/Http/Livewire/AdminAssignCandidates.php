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
        'placed_candidates.*.ballot_id' => 'required',
    ];

    public function assignCandidate($candidate_id)
    {
        $this->validate([
            'new_ballot_id' => 'required|numeric',
        ]);
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

    public function updateBallotAssignment()
    {
        $this->validate();
        //TODO: Make sure that it is a valid ballot ID
        $this->placed_candidates->each->save();
        session()->flash('message', 'Candidate has been updated');
    }

    public function mount() {
        $this->ballots = Ballot::all();
        $this->candidates = Candidate::doesntHave('ballot')->get();
        $this->placed_candidates = RunningCandidates::orderBy('ballot_id')->get();
    }

    public function render()
    {
        return view('livewire.admin-assign-candidates');
    }
}
