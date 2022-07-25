<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPromises extends Component
{
    public Candidate $candidate;

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-promises');
    }
}
