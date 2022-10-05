<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\UserVotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Storage;

class BallotController extends Controller
{
    public function getView($ballot_slug)
    {
        if(! auth()->check()) {
            if(Storage::disk('export')->exists('ballot/' . $ballot_slug . '/index.html')) {
                return Storage::disk('export')->get('ballot/' . $ballot_slug . '/index.html');
            }
        }
        $ballot = Cache::rememberForever('ballot-' . $ballot_slug, function () use ($ballot_slug) {
            $ballot = Ballot::firstWhere('slug', $ballot_slug);
            return $ballot->load('location:id,name,state',
                                    'office:id,name',
                                    'candidates');
        });
        $vote = null;
        if(auth()->check()) {
            $user_vote = UserVotes::where('ballot_id', $ballot->id)->where('user_id', auth()->id())->first();
            if($user_vote) {
                $vote = $user_vote->candidate->slug;
            }
        }
        // dd($ballot->all_candidates, $ballot->candidates);
        // dd($vote);
        return view('ballot.show', [
                'ballot' => $ballot,
                'vote' => $vote,
            ]);
    }

    public function update_vote(Request $request, $ballot_slug)
    {
        $request->validate([
            'vote' => 'required|string',
        ]);

        RateLimiter::attempt(
            'vote-' . auth()->id(),
            $perMinute = 10,
            function() use($ballot_slug, $request) {
                $candidate = Candidate::firstWhere('slug', $request->vote);
                $ballot = Ballot::firstWhere('slug', $ballot_slug);
                if($candidate && $ballot) {
                    UserVotes::updateOrCreate(
                    [
                        'user_id' => auth()->id(),
                        'ballot_id' => $ballot->id,
                    ],
                    [
                        'candidate_id' => $candidate->id,
                        'is_valid' => 1,
                    ]
                    );
                }
            }
        );
    }
}
