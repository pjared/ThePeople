<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Get the candidate with a slug. We want to cache that candidate for the next two minutes
     */
    public function getCandidate($slug) {
        return Cache::remember('candidate-' . $slug, 120, function () use ($slug) {
            $candidate = Candidate::firstWhere('slug', $slug);
            if (! $candidate) {
                return null;
            }
            return $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name',
                                'required_stances', 'stances',
                                'opinions', 'manual_candidate', 'educations', 'backgrounds')
                                ->loadCount('events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions',
                                'opinions', 'educations', 'backgrounds');
        });
        // 'events', 'videos', 'promises', 'previous_positions',
    }

    /**
     * Find the candidate in the database, and pass to candidate page. If the user is not logged in, return them a static page
     */
    public function getView($candidate_slug) {
        Log::info('Attempting to get candidate with slug: ' . $candidate_slug);
        if(! auth()->check()) {
            if(Storage::disk('export')->exists('/candidate/profile/' . $candidate_slug . '/index.html')) {
                return Storage::disk('export')->get('/candidate/profile/' . $candidate_slug . '/index.html');
            }
        }

        $candidate = $this->getCandidate($candidate_slug);
        return view('candidate.show', ['candidate' => $candidate]);
    }
}
