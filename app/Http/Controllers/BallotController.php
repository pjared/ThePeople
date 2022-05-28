<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BallotController extends Controller
{
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
        $validator = Validator::make($request->all(),[
                'cityInput' => 'required_without_all:stateInput, zipInput',
                'stateInput' => 'required_without_all:cityInput, zipInput',
                'zipInput' => 'required_without_all:stateInput, cityInput',
            ]);
        
        //Return with any errors
        if ($validator->fails()) {
            return redirect('/')
            ->withErrors(array(
                'Please fill atleast one location field'
                ))
                ->withInput();
            }
            $this->validate($request,[
                'office' => 'required',
            ]);

        // Get the location. If the user input multiple, choose zip > state > city
        //TODO - Figure out how i'm going to get the candidates for an area
        if($request->zipInput) {
            $location_type = "zip";
            $location = $request->zipInput;
        } else if ($request->cityInput) {
            $location_type = "city";
            $location = $request->cityInput;
        } else if ($request->stateInput) {
            $location_type = "state";
            $location = $request->stateInput;
        }

        //Logic for determining what region to use
        // switch ($location_type) {
        //     case 'state':
        //         break;
        //     case 'city':
        //         break; 
        //     case 'zip':
        //         break;
        // }
        $office = $request->office;

        // dd($location_type, $location, $office);
        
        $candidates = Candidate::all();
        return view('ballot.index')
                    ->with('candidates', $candidates)
                    ->with('location_type',$location_type)
                    ->with('location',$location);
    }
}
