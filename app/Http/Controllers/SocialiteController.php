<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        $user = User::updateOrCreate([
            'facebook_id' => $facebookUser->id,
        ], [
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_token' => $facebookUser->token,
            'facebook_refresh_token' => $facebookUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function handleTwitterCallback()
    {
        $twitterUser = Socialite::driver('twitter')->user();

        $user = User::updateOrCreate([
            'twitter_id' => $twitterUser->id,
        ], [
            'name' => $twitterUser->name,
            'email' => $twitterUser->email,
            'twitter_token' => $twitterUser->token,
            'twitter_refresh_token' => $twitterUser->refreshToken,
        ]);


        Auth::login($user);

        return redirect('/home');
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);


        Auth::login($user);

        return redirect('/home');
    }
}
