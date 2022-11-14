<?php

namespace Areeb;

use Illuminate\Support\ServiceProvider;

class EmailingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'areeb');
    }

    public function register()
    {
        # code...
    }
}