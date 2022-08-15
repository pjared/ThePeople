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
    public function getCandidateView(Candidate $candidate) {
        return view('candidate.show')
                    ->with('candidate', $candidate);
    }

    public function getCandidateDashBoard() {
        $candidate = Candidate::firstWhere('user_id', Auth::id());
        return view('candidate.dashboard')
                ->with('candidate', $candidate);;
    }
}
