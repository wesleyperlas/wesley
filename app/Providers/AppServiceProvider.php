<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

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
        // Remove the invalid method call
        // Vite::prefetch(concurrency: 3);

        // If you need to use Vite, ensure you are using valid methods
        // Example: Vite::useHotFile('hot');
    }
}
