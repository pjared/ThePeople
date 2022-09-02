<?php

namespace App\Http\Livewire\Candidate;

use App\Jobs\UpdateBallotCache;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Preview extends Component
{
    public Candidate $candidate;
    public $show;

    public function mount() {
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());

        if($this->candidate->running_candidate) {
            $this->show = $this->candidate->running_candidate->show;
        }
    }

    public function render()
    {
        return view('livewire.candidate.preview');
    }

    public function update_show_candidate() {
        if($this->candidate->running_candidate) {
            $this->candidate->running_candidate->show = $this->show;
            $this->candidate->running_candidate->save();
        }
        UpdateBallotCache::dispatch($this->candidate->ballot);
    }
}
