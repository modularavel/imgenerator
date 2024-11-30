<?php

use Illuminate\Support\Facades\Route;
use Modularavel\Imgenerator\Http\Controllers\ImageController;

Route::get('img', ImageController::class)->name('show.img');