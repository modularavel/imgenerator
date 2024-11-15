<?php

namespace Modularavel\Image\Http\Controllers;

use JetBrains\PhpStorm\NoReturn;
use Modularavel\Image\Image;

class ImageController
{
    #[NoReturn] public function __invoke()
    {
        request()->header();

        Image::start();
    }
}
