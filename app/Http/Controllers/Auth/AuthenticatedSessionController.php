<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    // AuthenticatedSessionController.php
    public function store(LoginRequest $request): RedirectResponse
    {
        // Assume 'credential' field can be either 'username' or 'email'
        $credentialField = filter_var($request->credential, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $credentialField => $request->credential,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($request->user()->usertype == 'admin') {
                return redirect('admin/dashboard');
            }

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'credential' => 'Email atau username belum terdaftar.',
            'password' => 'Kata sandi yang anda inputkan salah.',
        ]);
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
