<?php

namespace App\Http\Livewire\Candidate;

use Livewire\Component;

class FlagInfo extends Component
{
    public $promise_flags;
    public $opinion_flags = [];
    public $position_flags;
    public $other_opinion_flags;

    public function render()
    {
        return view('livewire.candidate.flag-info');
    }

    public function mount($flags, $opinions)
    {
        // dd($flags);
        //Filter for the flags with promise
        $this->promise_flags = $flags->where('flaggable_type', 'App\Models\CandidatePromise');
        //Filter flags for each opinion in ballot
        foreach ($opinions as $opinion) {
            $opinion_flags = $flags->where('flaggable_type', 'App\Models\CandidateStance')
                                        ->where('flaggable.controversial_opinion_id', $opinion->id);
            if(count($opinion_flags) >= 1) {
                $this->opinion_flags[$opinion->name] = $opinion_flags;
            }
        }
        //Filter flags for previous positions
        $this->position_flags = $flags->where('flaggable_type', 'App\Models\CandidateOfficePositions');

        //Other Opinions
        $this->other_opinion_flags = $flags->where('flaggable_type', 'App\Models\CandidateOpinions');
        // dd($this->other_opinion_flags);
    }
}
