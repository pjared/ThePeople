<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CreateCandidate extends Component
{
    public function render()
    {
        return view('livewire.admin.create-candidate')
                ->layout('layouts.admin');
    }
}
