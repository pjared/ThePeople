<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GetPrecinct extends Component
{
    public $not_found = false;
    public $precinct;

    public $street_addr;
    public $city;
    public $zip;
    public $manual_precinct;

    protected $rules = [
        'street_addr' => 'required_without:manual_precinct',
        'city' => 'required_without:manual_precinct',
        'zip' => 'nullable|digits:5',
        'manual_precinct' => 'nullable|string|min:1|max:6',
    ];

    /**
     * The user is a computed property to reduce DB calls
     */
    public function getUserProperty()
    {
        return auth()->user();
    }

    public function mount() {
        $this->precinct = $this->user->voter_precinct;
    }

    public function render()
    {
        return view('livewire.profile.get-precinct');
    }

    /**
     * Method to find the precinct with an address or manual input. This calls the US census API to get latitude/longitude coords
     * and if successful, will call the Utah Voter Precincts API.
     */
    public function get_precinct()
    {
        $this->validate();
        // Combine the address for the API call
        $address = $this->street_addr . ', ' . $this->city . ', UT, ' . $this->zip;
        //Call the Census API to get GEO coords
        $res = Http::get('https://geocoding.geo.census.gov/geocoder/locations/onelineaddress', [
                    'address' =>  $address,
                    'benchmark' => "2020",
                    'format' => 'json',
            ]);
        if(! empty($res->json()['result']['addressMatches'])) {
            $this->not_found = false;
            // The next API to call requires a square, and not a single x,y coord
            $x = $res->json()['result']['addressMatches'][0]['coordinates']['x'];
            $y = $res->json()['result']['addressMatches'][0]['coordinates']['y'];

            // Call the API
            $precent_res = Http::get('https://services1.arcgis.com/99lidPhWCzftIe9K/arcgis/rest/services/VistaBallotAreas/FeatureServer/0/query', [
                'where' =>  '1=1',
                'outFields' => "PrecinctID",
                'geometry' => $x . ',' . $y . ',' . $x . ',' . $y,
                'geometryType' => 'esriGeometryEnvelope',
                'inSR' => '4326',
                'spatialRel' => 'esriSpatialRelIntersects',
                'outSR' => '4326',
                'f' => 'json',
            ]);

            //Get the result from the JSON file (TODO: Testing on a failed call)
            $precinct = $precent_res->json()['features'][0]['attributes']['PrecinctID'];
            $this->precinct = $precinct;
            $this->user->voter_precinct = $precinct;
            $this->user->save();
        } else {
            // The census api call failed
            if(! $this->manual_precinct) {
                $this->not_found = true;
            }
        }
    }

    /**
     * When the user inputs a manual precinct, directly save this if it validates
     */
    public function save_manual_precinct()
    {
        $this->validate();
        $this->precinct = $this->manual_precinct;
        $this->not_found = false;
        $this->user->update([
            'voter_precinct' => $this->manual_precinct,
        ]);
    }
}
