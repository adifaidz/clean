<?php

namespace AdiFaidz\Clean\Providers;

use Illuminate\Support\ServiceProvider;

use AdiFaidz\Clean\Console\Commands\CleanAll;
use AdiFaidz\Clean\Console\Commands\CleanServe;
use AdiFaidz\Clean\Console\Commands\MathPlus;
class CleanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
          CleanAll::class,
          CleanServe::class,
          MathPlus::class,
        ]);
    }
}
