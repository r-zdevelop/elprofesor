<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/guides', function () {
    return view('guides.index');
})->name('guides.index');

Route::get('/guides/ubuntu-apache-php', function () {
    return view('guides.ubuntu-apache-php');
})->name('guide.ubuntu-apache-php');

Route::get('/guides/ubuntu-mysql-vhost-apu', function () {
    return view('guides.ubuntu-mysql-vhost-apu');
})->name('guide.ubuntu-mysql-vhost-apu');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('posts', PostController::class);
    Route::resource('projects', ProjectController::class);
});
