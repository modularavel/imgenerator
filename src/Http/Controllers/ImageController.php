<?php

namespace Modularavel\Imgenerator\Http\Controllers;

use Illuminate\Http\Request;
use Modularavel\Imgenerator\Facades\Imgenerator;

class ImageController
{
    public function __invoke(Request $request)
    {
        $request->header();

        Imgenerator::start();
    }
}
