<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Find the candidate in the database, and populate candidate page
     */
    public function getView($candidate_slug) {
        if(! auth()->check()) {
            if(Storage::disk('export')->exists('/candidate/profile/' . $candidate_slug . '/index.html')) {
                return Storage::disk('export')->get('/candidate/profile/' . $candidate_slug . '/index.html');
            }
        }

        $candidate = Candidate::firstWhere('slug', $candidate_slug);
        $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name');
        return view('candidate.show')
                    ->with('candidate', $candidate);
    }
}
