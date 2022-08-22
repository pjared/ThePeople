<?php

namespace App\Http\Livewire\Groups;

use App\Models\PoliticalGroup;
use Livewire\Component;

class ShowGroup extends Component
{
    public PoliticalGroup $group;

    public function mount(PoliticalGroup $political_group)
    {
        $this->group = $political_group->load('events');
    }

    public function render()
    {
        return view('livewire.groups.show-group');
    }
}
