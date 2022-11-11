<?php

namespace Areeb;

use Illuminate\Support\Facades\Route;
use Areeb\Http\Controller\EmailController;

Route::prefix('mail')->group(function () {
    Route::get('/', [EmailController::class, 'index']);
});