<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('administrator/register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('administrator/register', [RegisteredUserController::class, 'store']);

    Route::get('administrator/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('administrator/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('administrator/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('administrator/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('administrator/reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('administrator/verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('administrator/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('administrator/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('administrator/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('administrator/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('administrator/password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('administrator/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
