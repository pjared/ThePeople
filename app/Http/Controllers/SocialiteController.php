<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{

    public function checkForExistingUser($email, $socialite) {
        if(! $email) {
            return "No email given from provider. Please use another provider or manually register";
        }

        $user = User::firstWhere('email', $email);
        if($user) {
            switch($socialite) {
                case 'facebook':
                    if($user->facebook_id != null) {
                        return 1;
                    }
                    break;
                case 'twitter':
                    if($user->twitter_id != null) {
                        return 1;
                    }
                    break;
                case 'google':
                    if($user->google_id != null) {
                        return 1;
                    }
                    break;
                default:
                    return false;
                    break;
            }
            return "Email already in use. Have you signed up with a different provider already?";
        }
        return 1;
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        $user_exists = $this->checkForExistingUser($facebookUser->email, 'facebook');

        if($user_exists == 1) {
            $user = User::updateOrCreate([
                'facebook_id' => $facebookUser->id,
            ], [
                'name' => $facebookUser->name,
                'email' => $facebookUser->email,
            ]);
            Auth::login($user);

            return redirect('/home');
        }

        return redirect('/register')->withErrors(['socialite' => $user_exists]);
    }

    public function handleTwitterCallback()
    {
        $twitterUser = Socialite::driver('twitter')->user();

        $user_exists = $this->checkForExistingUser($twitterUser->email, 'twitter');

        if($user_exists == 1) {
            $user = User::updateOrCreate([
                'twitter_id' => $twitterUser->id,
            ], [
                'name' => $twitterUser->name,
                'email' => $twitterUser->email,
                // 'socialite_token' => $twitterUser->token,
            ]);

            Auth::login($user);

            return redirect('/home');
        }
        return redirect('/register')->withErrors(['socialite' => $user_exists]);
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user_exists = $this->checkForExistingUser($googleUser->email, 'google');

        if($user_exists == 1) {
            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                // 'socialite_token' => $googleUser->token,
                // 'socialite_refresh_token' => $googleUser->refreshToken,
            ]);

            Auth::login($user);

            return redirect('/home');
        }

        return redirect('/register')->withErrors(['socialite' => $user_exists]);
    }
}
