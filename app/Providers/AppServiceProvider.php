<?php

namespace App\Providers;

use App\Models\Brochure;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\SocialLink;
use Illuminate\Support\Facades\Schema;
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
        // Check tables exist before querying
        if (Schema::hasTable('brochures')) {
            View::share('brochure', Brochure::first());
        }

        if (Schema::hasTable('contact_us')) {
            View::share('contactUs', ContactUs::first());
        }

        if (Schema::hasTable('social_links')) {
            View::share('socialLink', SocialLink::first());
        }

        if (Schema::hasTable('services')) {
            View::composer('frontend.*', function ($view) {
                // fetch only active services and sort by `order`
                $view->with('allServices', Service::where('status', 1)->orderBy('order', 'asc')->get());
            });
        }

    }
}
