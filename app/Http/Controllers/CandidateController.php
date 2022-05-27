<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Find the candidate in the database, and populate candidate page
     */
    public function getCandidateView(Request $request, $id) {
        $candidate = Candidate::find(intval($id));
        return view('candidate.page')
                    ->with('candidate', $candidate);
    }
}
