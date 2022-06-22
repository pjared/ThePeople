<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Candidate;
use Livewire\Component;

class AdminAssignCandidates extends Component
{
    public $candidates;
    public $ballots;

    public function mount() {
        $this->candidates = Candidate::all();
        $this->ballots = Ballot::all();
    }

    public function render()
    {
        return view('livewire.admin-assign-candidates');
    }
}
