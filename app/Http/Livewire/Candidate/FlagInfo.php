<?php

namespace App\Http\Livewire\Candidate;

use Livewire\Component;

class FlagInfo extends Component
{
    public $promise_flags;
    public $opinion_flags = [];
    public $position_flags = [];

    public function render()
    {
        return view('livewire.candidate.flag-info');
    }

    public function mount($candidate_id, $flags, $opinions)
    {
        $this->promise_flags = $flags->where('type', 'promise');
        foreach ($opinions as $opinion) {
            $opinion_flags = $flags->where('type', $opinion->id . '-controversial-stance');
            if(count($opinion_flags) >= 1) {
                $this->opinion_flags[$opinion->name] = $opinion_flags;
            }
        }
        $this->position_flags = $flags->where('type', 'position');
    }
}
