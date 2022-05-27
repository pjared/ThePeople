<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

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
        // dd($request);
        $validated = $request->validate([
            'location' => 'required',
            'location_type' => 'required',
            'office' => 'required'
        ]);

        //Get the location that the user input
        $location_type = $request->location_type;
        $location = $request->location;
        $office = $request->office;

        //Logic for determining what region to use
        switch ($location_type) {
            case 'state':
                break;
            case 'city':
                break; 
            case 'zip':
                break;
        }
        
        $candidates = Candidate::all();
        return view('ballot.index')
                    ->with('candidates', $candidates);
    }
}
