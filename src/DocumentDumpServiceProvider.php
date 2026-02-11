<?php

namespace Tobya\Documentdump;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobya\Documentdump\Commands\DocumentDumpCommand;

class DocumentDumpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('documentdump')
            ->hasConfigFile()
            //->hasViews()
            //->hasMigration('create_documentdump_table')
            //->hasCommand(DocumentDumpCommand::class)
        ;
    }
}
