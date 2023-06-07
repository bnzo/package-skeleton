<?php

namespace Bnzo\PackageSkeleton;

use Bnzo\PackageSkeleton\Commands\PackageSkeletonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PackageSkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_package-skeleton_table')
            ->hasCommand(PackageSkeletonCommand::class);
    }
}
