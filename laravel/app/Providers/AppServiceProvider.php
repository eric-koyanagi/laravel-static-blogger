<?php

namespace App\Providers;

use App\Services\AWSService;
use App\Services\StaticPageBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AWSService::class, function () {
            return new AWSService();
        });

        $this->app->bind(StaticPageBuilder::class, function () {
            return new StaticPageBuilder();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
