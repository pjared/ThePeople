<?php

namespace App\Http\Livewire\Admin;

use App\Mail\CandidateBallotAssigned;
use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\RunningCandidates;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AssignCandidates extends Component
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

        Mail::to($running_candidate->candidate->user)->send(new CandidateBallotAssigned($ballot->office->name . ', ' . $ballot->location->name));
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
        return view('livewire.admin.assign-candidates');
    }
}
