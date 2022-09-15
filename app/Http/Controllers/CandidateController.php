<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ControversialOpinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    /**
     * Find the candidate in the database, and populate candidate page
     */
    public function getCandidateView($candidate_slug) {
        $candidate = Candidate::where('slug', $candidate_slug)->select('id', 'name' , 'slug')->first();
        $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name');
        return view('candidate.show')
                    ->with('candidate', $candidate);
    }

    public function getCandidateDashBoard() {
        $candidate = Candidate::firstWhere('user_id', Auth::id());
        return view('candidate.dashboard')
                ->with('candidate', $candidate);;
    }
}
