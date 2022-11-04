<?php

namespace Mbsoft31\LaravelModelOptions\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Mbsoft31\LaravelModelOptions\LaravelModelOptionsServiceProvider;

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
        config()->set('database.default', 'sqlite');
        config()->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => ''
        ]);

        $migration = include __DIR__.'/database/migrations/2022_10_27_144426_create_products_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/create_model_options_table.php.stub';
        $migration->up();

    }
}
