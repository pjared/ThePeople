<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ControversialOpinion;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Find the candidate in the database, and populate candidate page
     */
    public function getCandidateView($id) {
        $candidate = Candidate::find(intval($id));
        return view('candidate.show')
                    ->with('candidate', $candidate);
    }

    /**
     * Get the page ready for the candidate to sign up
     */
    public function getCandidateCreatePage() {
        //Get the list of controversial opinions for the candidate to input
        $controversial_opinions = ControversialOpinion::all();

        return view('candidate.create')
                ->with('controversial_opinions', $controversial_opinions);
    }
}
