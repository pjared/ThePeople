<?php

namespace App\Http\Livewire;

use App\Models\Ballot as ModelsBallot;
use Livewire\Component;

class Ballot extends Component
{
    public $ballot;

    public function mount($id)
    {
        $this->ballot = ModelsBallot::find($id);
    }

    public function render()
    {
        return view('livewire.ballot');
    }
}
