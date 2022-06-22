<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use Livewire\Component;

class FindBallot extends Component
{
    public $office;
    public $state_input;
    public $city_input;
    public $zip_input;

    protected $queryString = [
        'state_input' => ['except' => ''],
        'zip_input' => ['except' => ''],
        'city_input' => ['except' => ''],
    ];

    protected $listeners = [
        'officeClicked',
        'updateLocations',
    ];

    private function getLocationType($office_name) {
        switch ($office_name) {
            case 'Mayor':
                return 'city';
                break;
            case 'Governor':
                return 'state';
                break;
            case 'House':
                return 'state';
                break;
            case 'Senate':
                return 'state';
                break;
        }
    }

    private function getLocationId($location_type, $location_name) {
        $location = Location::where('name', $location_name)->where('type', $location_type)->first();
        
        if(!$location) {
            return null;   
        }
        return $location->id;
    }

    private function getOffice($office_name) {
        $position = PublicOfficePosition::firstWhere('name', $office_name);
        if(!$position) {
            return null;   
        }
        return $position->id;
    }

    public function mount() {
        $this->state_input = '';
        $this->city_input = '';
        $this->zip_input = '';
    }

    public function find_ballot()
    {
        // dd($this->office, $this->state_input);
        $office_id = $this->getOffice($this->office);
        $location_type = $this->getLocationType($this->office);
        switch ($location_type) {
            case 'city':
                $location = $this->city_input;
                break;
            case 'state':
                $location = $this->state_input;
                break;
        }
        if(!$location) {
            dd("failed");
            return;
        }
        $location_id = $this->getLocationId($location_type, $location);

        // if(!$office_id) {
        //     return back()->withErrors([
        //         'office' => 'Could not find this level of public office',
        //     ]);
        // }
        // if(!$location_id) {
        //     return back()->withErrors([
        //         'location' => 'Could not find this location',
        //     ]);
        // }

        // dd($office_id, $location_type, $location_id, PublicOfficePosition::all());

        $ballot = Ballot::where('location_id', $location_id)->where('office_id', $office_id)->first();
        
        // dd($ballot);
        return redirect()->route('ballot', ['id' => $ballot->id]);
    }

    public function officeClicked($office_name) {
        $this->office = $office_name;
        $this->find_ballot();
    }

    public function updateLocations($state, $city, $zip) {
        $this->state_input = $state;
        $this->city_input = $city;
        $this->zip_input = $zip;
    }

    public function render()
    {
        return view('livewire.find-ballot');
    }
}
