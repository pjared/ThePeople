<?php

namespace App\Http\Livewire\Candidate;

use Livewire\Component;

class Stances extends Component
{
    public $opinions;
    public $candidate_required_stances;
    public $candidate_stances;

    public function render()
    {
        return view('livewire.candidate.stances');
    }

    public function mount($opinions, $candidate) {
        $this->opinions = $opinions->load(['required_stances']);
        $this->candidate_required_stances = $candidate->required_stances;
        $this->candidate_stances = $candidate->stances;
        //TODO: Eager load each opinions required stance
    }
}
