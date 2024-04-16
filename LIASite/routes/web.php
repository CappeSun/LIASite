<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;

/* INDEX */

Route::get('/', function(){
    return view('index')->with('user', userInfo());
})->name('index');
Route::get('/test', function(){
    return view('indexTest')->with('user', userInfo());
})->name('indexTest');
Route::get('/chat', function(){
    return view('chat')->with('user', userInfo());
})->name('chat');


/* Profile */
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

/* CREATE ACCOUNT */
Route::get('/register-student', function(){
    return view('register-student');
})->name('register-student');
Route::post('/register-student', [UserController::class, 'create'])->name('register-student');

Route::get('/register-company', function(){
    return view('register-company');
})->name('register-company');

Route::get('/gdpr', function(){
    return view('gdpr');
})->name('gdpr');

/* LOGIN */
Route::get('/login', function(){
    return view('login');
})->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

/* MATCHA */
Route::get('/matcha', [PanelController::class, 'getList'])->name('matcha');

/* PANEL */

Route::get('/panels/{panel}', [PanelController::class, 'get']);
Route::post('/panels/create', [PanelController::class, 'create'])->middleware('auth');
Route::patch('/panels/update', [PanelController::class, 'update'])->middleware('auth');
Route::post('/panels/delete', [PanelController::class, 'delete'])->middleware('auth');
Route::patch('/panels/public', [PanelController::class, 'public'])->middleware('auth');
Route::patch('/panels/private', [PanelController::class, 'private'])->middleware('auth');

/* ACCOUNT */
Route::get('/account', function(){
    return view('account');
})->middleware('auth');
Route::get('/account/panel', function(){    // Change to panelcontroller and limit access to level 2
    return view('mypanel');
})->middleware('auth');
Route::post('/account/create', [UserController::class, 'create'])->middleware('guest');
Route::post('/account/delete', [UserController::class, 'delete'])->middleware('auth');

/* FAVORITES */
Route::get('/favorites', [FavoriteController::class, 'get'])->name('favorites');
Route::post('/favorites/add', [FavoriteController::class, 'add'])->middleware('auth');
Route::post('/favorites/remove', [FavoriteController::class, 'remove'])->middleware('auth');

/* CHAT */
Route::get('/chats', [ChatController::class, 'getList'])->middleware('auth');
Route::get('/chats/{receiver}', [ChatController::class, 'get'])->middleware('auth');
Route::post('/chats/load', [ChatController::class, 'load'])->middleware('auth');
Route::post('/chats/send', [ChatController::class, 'send'])->middleware('auth');
Route::post('/chats/receive', [ChatController::class, 'receive'])->middleware('auth');

/* FUNCTIONS */
function userInfo()
{
    if (Auth::user())
        return ['name' => Auth::user()['name'], 'level' => Auth::user()['access_level']];
    else
        return ['name' => 'Guest', 'level' => 0];
}
