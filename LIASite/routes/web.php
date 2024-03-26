<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return view('index');
});

Route::view('/', 'index')->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/panels/{panel}', function(){
    return view('panel')->with('panel', $panel);
});
Route::post('/panels/create', [PanelController::class, 'create'])->middleware('auth');
Route::patch('/panels/update', [PanelController::class, 'update'])->middleware('auth');

Route::patch('/user/create', [UserController::class, 'create'])->middleware('guest');