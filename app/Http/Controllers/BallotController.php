<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\PublicOfficePosition;
use App\Models\RunningCandidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BallotController extends Controller
{

    private function getOffice($office_name) {
        $position = PublicOfficePosition::firstWhere('name', $office_name);
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

    private function getLocationId($office_name) {
        //PROBLEM: If a user inputs a zip, it will not be the correct location for a governor. Going to have to get it through some list

        return 43;
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
        // dd($request->all()); TODO: Cannot validate if just city or zip
        $validator = Validator::make($request->all(),[
                'cityInput' => 'required_without_all:stateInput, zipInput',
                'stateInput' => 'required_without_all:cityInput, zipInput',
                'zipInput' => 'required_without_all:stateInput, cityInput',
            ]);
        
        //Return with any errors
        if ($validator->fails()) {
            return redirect('/')
            ->withErrors(array(
                'Please fill at least one location field'
                ))
                ->withInput();
        }
        $this->validate($request,[
            'office' => 'required', //TODO: Check for "Mayor"|"House"|"Senate"|"Governer"
        ]);

        // Get the location. If the user input multiple, choose zip > state > city
        if($request->zipInput) {
            // $location_type = "zip";
            $location = $request->zipInput;
        } else if ($request->cityInput) {
            // $location_type = "city";
            $location = $request->cityInput;
        } else if ($request->stateInput) {
            // $location_type = "state";
            $location = $request->stateInput;
        }

        $location_id = $this->getLocationId($location);
        $office_id = $this->getOffice($request->office);
        $location_type = $this->getLocationType($request->office); //TODO: Figure out the location aspect and re-implement
        //TODO: The office is always the last hiddenn element, so it's always getting the senator

        $running_candidates = RunningCandidates::where('public_office_id', $office_id)
                                            ->where('location_type', $location_type)
                                            ->where('location_id', $location_id)
                                            ->get();

        //TODO: If a user is signed in, pass in their vote also
        return view('ballot.index')
                    ->with('running_candidates', $running_candidates)
                    ->with('location_type',$location_type)
                    ->with('location',$location);
    }
}
