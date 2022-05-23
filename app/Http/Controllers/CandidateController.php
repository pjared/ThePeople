<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    //
    public function getCandidateView(Request $request) {
        $candidate_id = $request->id;

        $candidate = Candidate::find($candidate_id);
        return view('candidate.page')
                    ->with('candidate', $candidate);
    }

    public function candidate_edit_search() {
        return view('admin.find_candidate');
    }

    public function candidate_edit_page() {
        return view('admin.edit_page');
    }
}
