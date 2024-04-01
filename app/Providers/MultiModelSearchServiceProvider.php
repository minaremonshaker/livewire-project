<?php

namespace App\Providers;

use App\Services\MultiModelSearchService;
use Illuminate\Support\ServiceProvider;


class MultiModelSearchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('multisearch',function($app){
            return new MultiModelSearchService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
