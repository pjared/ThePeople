<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ballot;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use Livewire\Component;

class CreateBallot extends Component
{
    public Location $new_location;
    public PublicOfficePosition $new_position;
    public Ballot $new_ballot;

    public $locations;
    public $offices;
    public $balots;

    protected $rules = [
        'new_ballot.location_id' => 'nullable',
        'new_ballot.office_id' => 'nullable',
        'new_ballot.voting_date' => 'nullable',

        'new_position.name' => 'nullable',
        'new_position.years_per_term' => 'nullable',
        'new_position.limit_terms' => 'nullable',

        'new_location.type' => 'nullable',
        'new_location.name' => 'nullable',
        'new_location.state' => 'nullable',
    ];

    public function mount()
    {
        $this->new_ballot = new Ballot();
        $this->new_position = new PublicOfficePosition();
        $this->new_location = new Location();
    }

    public function render()
    {
        $this->locations = Location::all();
        $this->offices = PublicOfficePosition::all();
        $this->ballots = Ballot::all();
        return view('livewire.admin.create-ballot')
                    ->layout('layouts.admin');
    }

    public function createLocation()
    {
        $this->validate([
            'new_location.type' => 'nullable|string',
            'new_location.name' => 'nullable|string',
            'new_location.state' => 'nullable|string',
        ]);

        $this->new_location->save();
        session()->flash('message', 'Location Created');
    }

    public function createOffice()
    {
        $this->validate([
            'new_position.name' => 'required',
            'new_position.years_per_term' => 'required|numeric',
            'new_position.limit_terms' => 'nullable|numeric',
        ]);

        $this->new_position->save();

        session()->flash('message', 'Created a new office');
    }

    public function createBallot()
    {
        $this->validate([
            'new_ballot.location_id' => 'required',
            'new_ballot.office_id' => 'required',
            'new_ballot.voting_date' => 'required',
        ]);

        $this->new_ballot->save();

        session()->flash('message', 'Ballot Created');
    }
}
