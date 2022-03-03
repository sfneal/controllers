<?php

namespace Sfneal\Controllers\Tests\Assets\Providers;

use Illuminate\Support\ServiceProvider;

class TestingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
    }
}
