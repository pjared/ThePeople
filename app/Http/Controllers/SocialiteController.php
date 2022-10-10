<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        Log::info("Creating facebook user with ID: " . $facebookUser->id);
        $user = User::updateOrCreate([
            'facebook_id' => $facebookUser->id,
        ], [
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'socialite_token' => $facebookUser->token,
            'socialite_refresh_token' => $facebookUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function handleTwitterCallback()
    {
        $twitterUser = Socialite::driver('twitter')->user();
        Log::info("Creating twitter user with ID: " . $twitterUser->id);
        if($twitterUser->email) {
            $user = User::updateOrCreate([
                'twitter_id' => $twitterUser->id,
            ], [
                'name' => $twitterUser->name,
                'email' => $twitterUser->email,
                'socialite_token' => $twitterUser->token,
            ]);


            Auth::login($user);
        }

        return redirect('/home');
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        Log::info("Creating google user with ID: " . $googleUser->id);

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'socialite_token' => $googleUser->token,
            'socialite_refresh_token' => $googleUser->refreshToken,
        ]);


        Auth::login($user);

        return redirect('/home');
    }
}
