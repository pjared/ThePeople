<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use App\Models\RunningCandidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BallotController extends Controller
{

    private function getOffice($office_name) {
        $position = PublicOfficePosition::firstWhere('name', $office_name);
        //TODO: Do error handling for office name
        return $position->id;
    }

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
        $location = Location::where('name', $location_name)->where('location_type', $location_type)->first();
        //TODO: Do error handling for location ID
        return $location->id;
    }

    /**
     * The get ballot method will retrieve the candidates for a specific office and location.
     * 
     * Retrieves the following:
     *  - 
     *  -
     * Returns view: ballot/index
     */
    public function getBallot(Request $request) {
        //Validate the incoming data

        //At lease one is filled out
        //I'm too stupid to figure out the validation. If you want to do it with laravel validate be my guest
        //Get the location. If the user inputs multiple, choose zip > state > city
        if($request->zipInput) {
            $location = $request->zipInput;
        } else if ($request->cityInput) {
            $location = $request->cityInput;
        } else if ($request->stateInput) {
            $location = $request->stateInput;
        } else {
            return redirect('/')
            ->withErrors(array(
                'Please fill at least one location field'
                ))
            ->withInput();
        }

        $this->validate($request,[
            'office' => 'required', //TODO: Check for "Mayor"|"House"|"Senate"|"Governer"
        ]);

        $office_id = $this->getOffice($request->office);
        $location_type = $this->getLocationType($request->office);
        $location_id = $this->getLocationId($location_type, $location);

        $ballot = Ballot::where('location_id', $location_id)->where('public_office_id', $office_id)->first();
        if($ballot) {
            $running_candidates = RunningCandidates::where('ballot_id', $ballot->id)->get();
        } else {
            $running_candidates = [];
        }
       

        //TODO: If a user is signed in, pass in their vote also
        return view('ballot.index')
                    ->with('running_candidates', $running_candidates)
                    ->with('location_type',$location_type)
                    ->with('location',$location)
                    ->with('position', $request->office);
    }
}
