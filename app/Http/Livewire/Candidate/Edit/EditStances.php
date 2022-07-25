<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditStances extends Component
{
    public Candidate $candidate;
    public $opinions;

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);
        $this->opinions = $this->candidate->ballot ? $this->candidate->ballot->opinions : [];
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-stances');
    }
}
