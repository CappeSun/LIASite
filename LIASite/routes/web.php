<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;

/* INDEX */
Route::get('/', function(){
    return view('index');
});
Route::view('/', 'index')->name('login');

/* LOGIN */
Route::get('/login', function(){
    return view('loginpage');
});
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

/* PANEL */
Route::get('/panels', function(){
    return view('panels');
});
Route::get('/panels/{panel}', function(){
    return view('panel')->with('panel', $panel);
});
Route::post('/panels/create', [PanelController::class, 'create'])->middleware('auth');
Route::patch('/panels/update', [PanelController::class, 'update'])->middleware('auth');

/* USER */
Route::post('/user/create', [UserController::class, 'create'])->middleware('guest');
Route::post('/user/delete', [UserController::class, 'delete'])->middleware('auth');