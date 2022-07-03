<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use Livewire\Component;

class AdminCreateBallot extends Component
{
    public $location_state;
    public $location_name;
    public $location_type;

    public $office_name;
    public $years_per_term;
    public $term_limits;

    public $ballot_state;
    public $ballot_location;
    public $ballot_office;
    public $ballot_date;

    public $locations;
    public $offices;
    public $ballots;

    public function render()
    {
        $this->locations = Location::all();
        $this->offices = PublicOfficePosition::all();
        $this->ballots = Ballot::all();
        // dd($this->ballots);;
        return view('livewire.admin-create-ballot');
    }

    public function createLocation()
    {
        $this->validate([
            'location_state' => 'nullable|string',
            'location_name' => 'required',
            'location_type' => 'required',
        ]);

        $location = Location::firstOrCreate([
            'state' => $this->location_state,
            'name' => $this->location_name,
            'type' => $this->location_type,
            'opinion_type_id' => 1,
        ]);

        session()->flash('message', 'Location Created');
    }

    public function createOffice()
    {
        $this->validate([
            'office_name' => 'required',
            'years_per_term' => 'required|numeric',
            'term_limits' => 'nullable|numeric',
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
            'ballot_date' => 'required',
        ]);

        //TODO: Account for state here
        $location = Location::firstWhere('name', $this->ballot_location);
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
            'voting_date' => $this->ballot_date,
        ]);
        session()->flash('message', 'Ballot Created');
    }
}
