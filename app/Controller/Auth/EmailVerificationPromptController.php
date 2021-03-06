<?php

namespace App\Controller\Auth;

use App\Provider\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController
{
    /**
     * Display the email verification prompt.
     *
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.verify-email');
    }
}
