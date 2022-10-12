<?php

namespace App\Http\Livewire\Archive;

use App\Models\Location;
use Livewire\Component;

class LocationInput extends Component
{
    // public $location;

    public $state_input;
    public $city_input;
    public $zip_input;

    public function render()
    {
        $this->emitUp('updateLocations', $this->state_input, $this->city_input, $this->zip_input);
        return view('livewire.archive.location-input', [
            'states' =>Location::select("name")
                        ->where('name', 'LIKE', '%$this->state_input%')
                        ->where('type', 'state')
                        ->get(),

        ]);
    }
}
