<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GetPrecinct extends Component
{
    public $not_found = false;
    public $user;
    public $precinct;

    public $street_addr;
    public $city;
    public $zip;
    public $manual_precinct;

    protected $rules = [
        'street_addr' => 'required|min:6',
        'city' => 'required',
        'zip' => 'nullable|numeric|min:5|max:5',
    ];

    public function render()
    {
        $this->user = auth()->user();
        $this->precinct = $this->user->voter_precinct;
        return view('livewire.profile.get-precinct');
    }

    public function get_precinct()
    {
        $this->validate();
        $address = $this->street_addr . ', ' . $this->city . ', UT, ' . $this->zip;
        $res = Http::get('https://geocoding.geo.census.gov/geocoder/locations/onelineaddress', [
                    'address' =>  $address,
                    'benchmark' => "2020",
                    'format' => 'json'
            ]);
        if(! empty($res->json()['result']['addressMatches'])) {
            $this->not_found = false;
            $x = $res->json()['result']['addressMatches'][0]['coordinates']['x'];
            $y = $res->json()['result']['addressMatches'][0]['coordinates']['y'];

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
            $precinct = $precent_res->json()['features'][0]['attributes']['PrecinctID'];
            $this->precinct = $precinct;
            $this->user->update([
                'voter_precinct' => $precinct,
            ]);
        } else {
            $this->not_found = true;
        }
    }

    public function save_manual_precinct()
    {
        $this->validate([
            'manual_precinct' => 'required|min:1|max:6',
        ]);
        $this->user->update([
            'voter_precinct' => $this->manual_precinct,
        ]);
    }
}
