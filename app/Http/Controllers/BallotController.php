<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BallotController extends Controller
{
    public function getBallot() {
        
        return view('ballot.index');
    }
}
