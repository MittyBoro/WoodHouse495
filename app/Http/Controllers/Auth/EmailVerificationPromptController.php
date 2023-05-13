<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        if ($request->header('Is-Inertia')) {
            return Inertia::render('Auth/VerifyEmail', [
                'status' => session('status'),
            ]);
        } else {
            return $request->user()->hasVerifiedEmail()
                ? redirect()->intended('/')
                : view('auth.verify-email');
        }
    }
}
