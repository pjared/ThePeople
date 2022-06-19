<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use Illuminate\Http\Request;

class BallotController extends Controller
{
    public function getBallotView($id)
    {
        $ballot = Ballot::find($id);
        return view('ballot.show')
                ->with('ballot', $ballot);
    }
}
