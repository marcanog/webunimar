<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

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
        if (env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        if (env('REDIRECT_HTTPS')) {
            $url->formatScheme('https://');
        }
=======
        //
>>>>>>> 8e2c6535f612ef6eebbf3e9412a9ef7f677ad0af
    }
}
