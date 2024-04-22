<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\AddPostController;

    Route::get('addpost', [AddPostController::class, 'create'])
                ->name('addpost');

    Route::post('addpost', [AddPostController::class, 'store']);