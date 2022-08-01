<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class HomeController extends Controller
{
    public function getWelcomeView() {
        $ballots = Ballot::all();
        return view('welcome')
                ->with('ballots', $ballots);
    }

    public function getAboutUsView() {
        $aboutUsFile = Jetstream::localizedMarkdownPath('about-us.md');

        return view('about-us', [
            'about_us' => Str::markdown(file_get_contents($aboutUsFile)),
        ]);
    }
}
