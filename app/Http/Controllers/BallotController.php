<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use Illuminate\Http\Request;

class BallotController extends Controller
{
    public function getBallotView(Ballot $ballot)
    {
        return view('ballot.show')
                ->with('ballot', $ballot);
    }
}
