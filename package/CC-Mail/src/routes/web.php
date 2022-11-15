<?php

namespace CooperativeComputing;

use Illuminate\Support\Facades\Route;
use CooperativeComputing\Http\Controller\EmailController;

Route::prefix('mail')->group(

function () {
    Route::get('/', [EmailController::class, 'index'])->name('index');
    Route::post('/send', [EmailController::class, 'sendEmail'])->name('sendEmail');
});