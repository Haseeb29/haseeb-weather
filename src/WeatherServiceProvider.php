<?php

namespace Haseeb\Weather;

use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
//        $this->app->bind('weather', function ($app) {
//            return new Weather();
//        });

//        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'weather');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'weather');

//        $this->publishes([
//            __DIR__ . '/config/config.php' => config_path('weather.php'),
//        ], 'config');

    }
}
