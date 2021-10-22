<?php

namespace AhMobin\PinPolicy;

use Illuminate\Support\ServiceProvider;

class PinPolicyServiceProvider extends ServiceProvider
{
    protected $stack = [
        'Illuminate\View\Middleware\ErrorBinder',
    ];

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->loadViewsFrom(__DIR__.'/../views', 'pin-policy');
    }


    public function register()
    {
        //
    }
}
