<?php

namespace App\Http\Livewire;

use App\Models\ControversialOpinion;
use App\Models\Location;
use App\Models\OpinionTypes;
use Livewire\Component;

class AdminEditOpinions extends Component
{
    public $opinions;
    public $opinion_types;
    public $locations;

    protected $rules = [
        "opinions.*.type_id" => 'required|numeric',
        "locations.*.opinion_type_id" => 'required|numeric',
    ];

    public function save_opinions()
    {
        $this->validate();
        $this->opinions->each->save();
        session()->flash('message', 'Opinion IDs have been updated');
    }

    public function save_locations() 
    {
        $this->validate();
        $this->locations->each->save();
        session()->flash('message', 'Locations have been updated');
    }

    public function mount()
    {
        $this->opinions = ControversialOpinion::orderBy('type_id')->get();
        $this->opinion_types = OpinionTypes::all();
        $this->locations = Location::all();
    }

    public function render()
    {   
        return view('livewire.admin-edit-opinions');
    }
}
