<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Politician;
use Illuminate\Http\Request;

class PoliticianController extends Controller
{
    /**
     * 
     */
    public function getPolticianView(Request $request) {
        $politician_id = $request->id;

        $candidate = Politician::find($politician_id);
        return view('candidate.page')
                    ->with('candidate', $candidate);
    }
}
