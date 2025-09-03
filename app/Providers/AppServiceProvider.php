<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Contracts\VerifyEmailResponse;
use App\Responses\VerifyEmailResponse as CustomVerifyEmailResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register our custom email verification response
        $this->app->singleton(VerifyEmailResponse::class, CustomVerifyEmailResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
