<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\UserFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    public function submitFeedback(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'feedback_type' => 'required|max:255',
            'feedback' => 'required|string',
        ]);

        if ($validated->stopOnFirstFailure()->fails()) {
            return;
        }
        UserFeedback::create([
            'feedback_type' => $request->feedback_type,
            'feedback' => $request->feedback,
        ]);
    }
}
