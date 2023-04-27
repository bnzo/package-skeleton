<?php

namespace Bnzo\PackageSkeleton\Commands;

use Illuminate\Console\Command;

class PackageSkeletonCommand extends Command
{
    public $signature = 'package-skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
