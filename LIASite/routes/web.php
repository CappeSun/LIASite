<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;

/* INDEX */
Route::get('/', [LoginController::class, 'indexPage']);

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
Route::post('/panels/delete', [PanelController::class, 'delete'])->middleware('auth');

/* ACCOUNT */
Route::get('/account', function(){
    return view('account');
})->middleware('auth');
Route::get('/account/panel', function(){
    return view('mypanel');
})->middleware('auth');
Route::post('/account/create', [UserController::class, 'create'])->middleware('guest');
Route::post('/account/delete', [UserController::class, 'delete'])->middleware('auth');