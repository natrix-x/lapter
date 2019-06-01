<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
        $accept = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($accept))
        {
            return redirect()->route('dashboard');
        }
        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(request(['email']));

    }

}
