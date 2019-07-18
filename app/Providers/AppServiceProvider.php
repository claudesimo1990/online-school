<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $app_url = env('APP_URL');
        if ($app_url =! "local"){
        $this->app['request']->server->set('HTTPS', true);
        URL::forceScheme('https');
        }
    }
}
