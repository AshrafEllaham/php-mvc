<?php

use Learn\PhpMvc\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);