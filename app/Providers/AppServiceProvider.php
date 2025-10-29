<?php

namespace App\Providers;

use App\Models\Brochure;
use App\Models\ContactUs;
use App\Models\SocialLink;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::share('brochure', Brochure::first());
        View::share('contactUs', ContactUs::first());
        View::share('socialLink', SocialLink::first());
    }
}
