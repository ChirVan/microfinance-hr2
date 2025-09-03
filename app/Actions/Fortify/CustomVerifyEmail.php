<?php

namespace App\Actions\Fortify;

use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Laravel\Fortify\Contracts\VerifyEmailResponse;

class CustomVerifyEmail
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function __invoke($request)
    {
        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return app(VerifyEmailResponse::class);
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return Redirect::route('verification.success');
    }
}
