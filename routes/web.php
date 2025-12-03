<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/guides/ubuntu-apache-php', function () {
    return view('guides.ubuntu-apache-php');
})->name('guide.ubuntu-apache-php');
