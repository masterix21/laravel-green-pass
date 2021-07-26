<?php

namespace Masterix21\LaravelGreenPass;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Masterix21\LaravelGreenPass\Commands\LaravelGreenPassCommand;

class LaravelGreenPassServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-green-pass')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-green-pass_table')
            ->hasCommand(LaravelGreenPassCommand::class);
    }
}
