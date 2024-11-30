<?php

namespace Modularavel\Imgenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modularavel\Imgenerator\Imgenerator
 */
class Imgenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Modularavel\Imgenerator\Imgenerator::class;
    }
}
