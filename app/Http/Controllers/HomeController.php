<?php

namespace App\Http\Controllers;

use App\Models\UserFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class HomeController extends Controller
{
    /**
     * Method for getting the home page of the site. If the user is logged in, make sure to direct them to "home"
     */
    public function getWelcomeView() {
        if(auth()->check()) {
            return redirect('/home');
        }
        return view('welcome');
    }

    public function getAboutUsView() {
        $aboutUsFile = Jetstream::localizedMarkdownPath('about-us.md');

        return view('about-us', [
            'about_us' => Str::markdown(file_get_contents($aboutUsFile)),
        ]);
    }

    /**
     * A method to catch the POST call to submit feedback. Users may only submit two feedbacks per minute to
     * reduce spamming
     */
    public function submitFeedback(Request $request)
    {
        $user_id = auth()->id();
        RateLimiter::attempt(
            'send-message:' . $user_id,
            $perMinute = 2,
            function() use ($request) {
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
        );

    }
}
