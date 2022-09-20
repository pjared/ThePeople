<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ControversialOpinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $candidate = Candidate::where('slug', $candidate_slug)->select('id', 'name' , 'slug')->first();
        $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name');
        return view('candidate.show')
                    ->with('candidate', $candidate);
    }
}
