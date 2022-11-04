<?php

namespace Mbsoft31\LaravelModelOptions\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mbsoft31\LaravelModelOptions\LaravelModelOptionsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mbsoft31\\LaravelModelOptions\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelModelOptionsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-model-options_table.php.stub';
        $migration->up();
        */
    }
}
