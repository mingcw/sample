<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        Carbon::setLocale('zh');

        $location = geoip($request->ip());
        View::share('location', $location);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
