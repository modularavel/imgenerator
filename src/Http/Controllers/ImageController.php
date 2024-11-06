<?php

namespace Modularavel\Image\Http\Controllers;

use Modularavel\Image\Image;

class ImageController
{
    public function __invoke()
    {
        Image::start();
    }
}
