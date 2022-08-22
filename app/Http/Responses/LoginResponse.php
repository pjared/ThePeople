<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        // dd(url()->previous(), auth(), url());
        // return $request->wantsJson()
        //             ? response()->json(['two_factor' => false])
        //             : redirect()->intended(url()->previous());
        return redirect(session('link'));
    }

}
