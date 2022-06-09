<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if($request->rememberCheck == "on") {
            $remember = true;
        } else {
            $remember = false;
        }

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if($request->rememberCheck == "on") {
            $remember = true;
        } else {
            $remember = false;
        }

        $user = new User;
        $user->email = $request->email;
        //TODO: Don't we need to hash this on the clients side?
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);
        
        $request->session()->regenerate();
        return redirect('/')->with('success', 'Account successfully registered');
    }

    public function logout() {
        Auth::logout();
        return redirect()->intended('/');
    }
}
