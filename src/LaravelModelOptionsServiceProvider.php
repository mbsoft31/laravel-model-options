<?php

namespace Mbsoft31\LaravelModelOptions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mbsoft31\LaravelModelOptions\Commands\LaravelModelOptionsCommand;

class LaravelModelOptionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-options')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-model-options_table')
            ->hasCommand(LaravelModelOptionsCommand::class);
    }
}
