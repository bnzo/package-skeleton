<?php

namespace Bnzo\PackageSkeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bnzo\PackageSkeleton\PackageSkeleton
 */
class PackageSkeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bnzo\PackageSkeleton\PackageSkeleton::class;
    }
}
