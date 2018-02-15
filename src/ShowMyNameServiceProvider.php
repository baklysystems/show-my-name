<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ShowMyNameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRouteFrom(__DIR__.'routes/show-my-name.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
