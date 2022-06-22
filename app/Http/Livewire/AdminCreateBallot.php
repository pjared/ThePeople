<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use Livewire\Component;

class AdminCreateBallot extends Component
{
    public $state;
    public $location_name;
    public $location_type;

    public $office_name;
    public $years_per_term;
    public $term_limits;

    public $ballot_state;
    public $ballot_location;
    public $ballot_office;

    public function createLocation()
    {
        $this->validate([
            'state' => 'required',
            'location_name' => 'required',
            'location_type' => 'required',
        ]);

        $location = Location::firstOrCreate([
            'state' => $this->state,
            'name' => $this->location_name,
            'type' => $this->location_type,
        ]);

        session()->flash('message', 'Location Created');
    }

    public function createOffice()
    {
        $this->validate([
            'office_name' => 'required',
            'years_per_term' => 'required|numeric',
            'term_limits' => 'required|numeric',
        ]);

        $location = PublicOfficePosition::firstOrCreate([
            'years_per_term' => $this->years_per_term,
            'name' => $this->office_name,
            'limit_terms' => $this->term_limits,
        ]);

        session()->flash('message', 'Created a new office');
        // dd($this->office_name, $this->years_per_term, $this->term_limits);
    }

    public function createBallot()
    {
        $this->validate([
            'ballot_location' => 'required',
            'ballot_state' => 'required',
            'ballot_office' => 'required',
        ]);

        $location = Location::where('name', $this->ballot_location)
                                ->where('state', $this->ballot_state)
                                ->first();

        $office = PublicOfficePosition::firstWhere('name', $this->ballot_office);

        if(!$office) {
            session()->flash('error', 'Could not find this office');
            return;
        }
        if(!$location) {
            session()->flash('error', 'Could not find this location');
            return;
        }

        $ballot = Ballot::firstOrCreate([
            'office_id' => $office->id,
            'location_id' => $location->id,
        ]);
    }

    public function render()
    {
        return view('livewire.admin-create-ballot');
    }
}
