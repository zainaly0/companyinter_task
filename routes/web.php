<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/form', [UserController::class, 'form'])->name('form');
Route::post('/formdata', [UserController::class, 'formdata'])->name('fromdata');

