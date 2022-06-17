<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use Livewire\Component;

class BallotList extends Component
{
    public $ballots;

    public function mount()
    {
        $this->ballots = Ballot::all();
    }

    public function render()
    {
        return view('livewire.ballot-list');
    }
}
