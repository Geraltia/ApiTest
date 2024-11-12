<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/registration', [UserController::class, 'register']);
Route::middleware('auth:sanctum')->get('/profile', [UserController::class, 'profile']);
