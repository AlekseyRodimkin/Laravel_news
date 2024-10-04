<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin/posts');
});

Route::middleware("guest:admin")->group(function() {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function() {
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    Route::get('users', [\App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users');
    Route::get('contacts', [\App\Http\Controllers\Admin\AppealController::class, 'index'])->name('contacts');

    Route::resource('posts', \Admin\PostController::class);
});
