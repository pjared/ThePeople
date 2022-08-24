<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as LoginResponseContract;

class RegisterResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        return redirect(session('link'));
    }

}
