<?php

namespace App\Providers;

use App\Models\CmsSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
        // Set locale from session or default
        App::setLocale(Session::get('locale', config('app.locale')));

        $cmsSettings = CmsSetting::first();
        View::share('cmsSettings', $cmsSettings);
    }
}
