<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditBio extends Component
{
    public Candidate $candidate;

    protected $rules = [
        'candidate.bio' => 'nullable|string',
    ];

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-bio');
    }

    public function save_bio() 
    {
        $this->validate([
            'candidate.bio' => 'required',
        ]);

        $this->candidate->save();
        session()->flash('update-bio-success');
    }
}
