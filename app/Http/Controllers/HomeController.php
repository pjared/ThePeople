<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getWelcomeView() {
        $ballots = Ballot::all();
        return view('welcome')
                ->with('ballots', $ballots);
    }
}
