<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/landingpage');
        } else {
            return back()->withErrors(
                [
                    'errors' =>
                    'Login failed. Try again!'
                ]
            );
        }
    }
}
