<?php

use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('user', UserController::class); 
Route::apiResource('academia', AcademiaController::class); 
Route::apiResource('estado', EstadoController::class); 
