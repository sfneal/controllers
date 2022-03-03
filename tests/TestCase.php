<?php

namespace Sfneal\Controllers\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\View;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Sfneal\Controllers\Tests\Assets\Providers\TestingServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Register package service providers.
     *
     * @param  Application  $app
     * @return array|string
     */
    protected function getPackageProviders($app)
    {
        return [
            TestingServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        View::addLocation(__DIR__.'/resources/views');
    }
}
