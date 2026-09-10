<?php

declare(strict_types=1);

namespace Candtry\Candtry\Tests;

use Candtry\Candtry\CandtryServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CandtryServiceProvider::class,
        ];
    }
}
