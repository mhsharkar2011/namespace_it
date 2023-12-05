<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CalculateServiceProdiver extends ServiceProvider
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
        $data = [];
        $data['a'] = 20;
        $data['b'] = 30;
        $data['c'] = $data['a'] + $data['b'];
        view()->share('number',$data);
    }
}
