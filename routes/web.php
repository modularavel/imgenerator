<?php

use Illuminate\Support\Facades\Route;
use Modularavel\Image\Http\Controllers\ImageController;

Route::get('img', ImageController::class)->name('show.img');
