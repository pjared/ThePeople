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

    public function getCandidatePreview($id) {
        $candidate = Candidate::find(intval($id));
        return view('candidate.preview')
                    ->with('candidate', $candidate);
    }
}
