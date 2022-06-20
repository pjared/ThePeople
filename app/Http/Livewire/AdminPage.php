<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminPage extends Component
{
    public $requests;

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.admin-page');
    }
}
