<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        return redirect()->route('login.otp');
    }

    public function otp()
    {
        return view('auth.verify-otp');
    }


    public function otpStore(Request $request){

        $user = User::whereEmail(session('user_email'))->first();

        if(!session('user_email')){
            return back()->withErrors(['otp' => 'Session expired']);
        }


        if ($request->otp == $user->otp) {
            Auth::login($user);
            $user->otp = null;
            $user->save();

            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);

        }

        return back()->withErrors(['otp' => 'Invalid OTP entered']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
