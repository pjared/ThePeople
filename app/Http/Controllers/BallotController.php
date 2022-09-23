<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use Illuminate\Support\Facades\Cache;
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
        // dd($ballot->all_candidates, $ballot->candidates);
        return view('ballot.show')
                ->with('ballot', $ballot);
    }
}
