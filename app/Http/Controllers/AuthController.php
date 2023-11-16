<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) 
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        event(new Registered($user));
        return $request;
    }

    public function login (LoginRequest $request) {
        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials)) {
            return redirect()->route('login');
        }

        return redirect()->route('home');
    }

    public function logout() : RedirectResponse 
    {
        auth()->logout();

        return redirect()->route('login');
    }

    public function verifyEmail (EmailVerificationRequest $request) : RedirectResponse
    {
        $request->fulfill();
 
        return redirect()->route('home');
    }

    public function sendVerificationEmail (Request $request) : RedirectResponse
    {
        $request->user()->sendEmailVerificationNotification();
 
        return back()->with('message', 'Verification link sent!');
    }
}
