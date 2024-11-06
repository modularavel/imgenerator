<?php

namespace Modularavel\Image\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modularavel\Image\Image
 */
class Image extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Modularavel\Image\Image::class;
    }
}
