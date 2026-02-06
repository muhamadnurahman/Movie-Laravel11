<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
                        

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $config = [
            'title' => 'Config Service Provider',
            'year' => '2022',
            'author' => 'Laravel',
            'theme' => 'dark',
        ];

        View::share('config', $config);
    }
}
