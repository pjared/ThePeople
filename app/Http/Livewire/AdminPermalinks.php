<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class AdminPermalinks extends Component
{
    public $candidates;

    public function mount()
    {
        $this->candidates = Candidate::all();
    }

    public function render()
    {
        return view('livewire.admin-permalinks');
    }
}
