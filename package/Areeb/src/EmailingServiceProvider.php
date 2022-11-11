<?php

namespace Areeb;

use Illuminate\Support\ServiceProvider;

class EmailingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        # code...
    }
}