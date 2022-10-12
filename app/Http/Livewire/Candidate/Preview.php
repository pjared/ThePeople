<?php

namespace App\Http\Livewire\Candidate;

use App\Jobs\UpdateBallotCache;
use App\Jobs\UpdateCandidateAndBallotSearches;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

/**
 * A wire for the candidate's preview in their admin page
 */
class Preview extends Component
{
    public Candidate $candidate;
    public $show;

    public function mount()
    {
        $this->show = $this->candidate->show;
    }

    public function getCandidateProperty()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());
    }

    public function render()
    {
        return view('livewire.candidate.preview');
    }

    public function update_show_candidate() {
        $this->candidate->show = $this->show;
        $this->candidate->save();
        UpdateBallotCache::dispatch($this->candidate->ballot);

        //Update the candidate's search
        UpdateCandidateAndBallotSearches::dispatch($this->data['candidate_id'], $this->data['show'])->afterCommit();
    }
}
