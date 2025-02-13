<?php

use Illuminate\Support\Facades\Route;
use YourPackageNamespace\Http\Controllers\YourAuthController;
use Looxis\LibreworkspaceSocialiteProvider\AuthController;

Route::middleware(['web'])->group(function () {
    Route::get('auth/libreworkspace/callback', [AuthController::class, 'callback'])
        ->name('libreworkspace.auth.callback');

    Route::get('auth/libreworkspace/redirect', [AuthController::class, 'redirect'])
        ->name('libreworkspace.auth.redirect');
});
