<?php

namespace App\Http\Livewire\Ballot;

use Livewire\Component;

class PrintBallot extends Component
{
    public $votes;

    public function mount()
    {
        $this->votes = auth()->user()->votes->load('ballot', 'candidate:name');

    }

    public function render()
    {
        return view('livewire.ballot.print-ballot');
    }
}
