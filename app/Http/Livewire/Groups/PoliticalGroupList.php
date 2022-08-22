<?php

namespace App\Http\Livewire\Groups;

use App\Models\PoliticalGroup;
use Livewire\Component;

class PoliticalGroupList extends Component
{
    public $groups;

    public function mount() {
        $this->groups = PoliticalGroup::all();
        // dd($this->groups);
    }

    public function render()
    {
        return view('livewire.groups.political-group-list');
    }
}
