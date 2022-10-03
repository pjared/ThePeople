<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function getCandidate($slug) {
        return Cache::remember('candidate-' . $slug, 120, function () use ($slug) {
            $candidate = Candidate::firstWhere('slug', $slug);
            return $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name',
                                'required_stances', 'stances',
                                'opinions', 'manual_candidate', 'educations', 'backgrounds')
                                ->loadCount('events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions',
                                'opinions', 'educations', 'backgrounds');
        });
        // 'events', 'videos', 'promises', 'previous_positions',
    }
    /**
     * Find the candidate in the database, and populate candidate page
     */
    public function getView($candidate_slug) {
        if(! auth()->check()) {
            if(Storage::disk('export')->exists('/candidate/profile/' . $candidate_slug . '/index.html')) {
                return Storage::disk('export')->get('/candidate/profile/' . $candidate_slug . '/index.html');
            }
        }

        $candidate = $this->getCandidate($candidate_slug);
        $is_manual = is_null($candidate->user_id);
        if ($candidate->ballot) {
            $opinions = $candidate->ballot->opinions->load(['required_stances']);
        } else {
            $opinions = [];
        }
        if(! auth()->check()) {
            $flags = [];
        } else {
            $flags =  auth()->user()->flags->where('ballot_id', $candidate->ballot->id)->where('candidate_id', $candidate->id);
        }
        return view('candidate.show')
                    ->with('candidate', $candidate)
                    ->with('opinions', $opinions)
                    ->with('flags', $flags)
                    ->with('is_manual', $is_manual);
    }
}
