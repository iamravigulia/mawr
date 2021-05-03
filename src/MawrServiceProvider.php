<?php

namespace edgewizz\mawr;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MawrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Mawr\Controllers\MawrController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'mawr');
        Blade::component('mawr::mawr.open', 'mawr.open');
        Blade::component('mawr::mawr.index', 'mawr.index');
        Blade::component('mawr::mawr.edit', 'mawr.edit');
    }
}
