<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use Livewire\Component;

class BallotList extends Component
{
    public $ballots;

    public function mount()
    {
        $this->ballots = Ballot::with('office', 'location')->withCount('candidates')->get();
    }

    public function render()
    {
        return view('livewire.ballot.ballot-list');
    }
}
