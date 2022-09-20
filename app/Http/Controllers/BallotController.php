<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Ballot\ShowBallot;
use App\Models\Ballot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class BallotController extends Controller
{
    public function getView(Ballot $ballot)
    {
        if(! auth()->check()) {
            if(Storage::disk('export')->exists('ballot/' . $ballot->slug . '/index.html')) {
                return Storage::disk('export')->get('ballot/' . $ballot->slug . '/index.html');
            }
        }
        $ballot = Cache::rememberForever('ballot-' . $ballot->slug, function () use ($ballot) {
            return $ballot->load('location:id,name,state',
                                    'office:id,name',
                                    'candidates',
                                    'candidates.candidate:id,slug,profile_photo_path,name');
        });
        return view('ballot.show')
                ->with('ballot', $ballot);
    }
}
