<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload', [UploadController::class, 'store']);

Route::get('/anime-list', [AnimeController::class, 'index']);
Route::get('/anime-list/{id}', [AnimeController::class, 'ani']);

Route::get('/s-result', [SearchController::class, 'search'])->name('web.search');

Route::get('/user', [UserController::class, 'showUsers'])->name('showusers');
Route::get('/create', [UserController::class, 'create']);
Route::post('/create', [UserController::class, 'saveUser'])->name('createUser');


Route::get('/login', [AuthController::class, 'log'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('signin');
Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');
