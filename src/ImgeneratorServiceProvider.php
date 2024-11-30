<?php

namespace Modularavel\Imgenerator;

use Modularavel\Imgenerator\Commands\ImageCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ImgeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('imgenerator')
            ->hasViews()
            ->hasAssets()
            ->hasConfigFile()
            ->hasRoutes(['web'])
            ->hasCommand(ImageCommand::class)
            ->sharesDataWithAllViews('downloads', 3)
            ->publishesServiceProvider(ImgeneratorServiceProvider::class)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->startWith(function (InstallCommand $command) {
                        $command->info('Hello, and welcome to my great new package!');
                    })
                    ->publishAssets()
                    ->publishConfigFile()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('modularavel/image')
                    ->endWith(function (InstallCommand $command) {
                        $command->info('Have a great day!');
                    });
            });
    }
}
