<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* Temporary registerpg */
Route::get('/register', function () {
    return view('register-student');
});

// TODO: Istället för att gruppera efter användare kan vi gruppera efter model/controller

// Guest users
Route::middleware('guest')->group(function () {
});

// Authenticated users
Route::middleware('auth')->group(function () {
});
