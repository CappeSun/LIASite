<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Guest users
Route::middleware('guest')->group(function () {
});

// Authenticated users
Route::middleware('auth')->group(function () {
});