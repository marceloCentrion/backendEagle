<?php

use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\AcademiaRatingsController;
use App\Http\Controllers\BairrosController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\GruposMuscularesController;
use App\Http\Controllers\ParceirosController;
use App\Http\Controllers\SegmentosParceirosController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('user', UserController::class); 
Route::apiResource('academia', AcademiaController::class); 
Route::apiResource('estado', EstadoController::class); 
Route::apiResource('cidade', CidadeController::class); 
Route::apiResource('academia-ratings', AcademiaRatingsController::class); 
Route::apiResource('grupos-musculares', GruposMuscularesController::class);
Route::apiResource('bairros', BairrosController::class);
Route::apiResource('fabricantes', FabricanteController::class);
Route::apiResource('segmentos-parceiros', SegmentosParceirosController::class);
Route::apiResource('parceiros', ParceirosController::class);

