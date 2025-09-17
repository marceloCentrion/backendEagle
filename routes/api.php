<?php

use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\AcademiaRatingsController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\BairrosController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\FileUserController;
use App\Http\Controllers\GruposMuscularesController;
use App\Http\Controllers\IndicacaoController;
use App\Http\Controllers\ParceirosController;
use App\Http\Controllers\PerfilAcessosController;
use App\Http\Controllers\PermissoesController;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\PublicidadesController;
use App\Http\Controllers\RedeSocialController;
use App\Http\Controllers\RegistroExecTreinoController;
use App\Http\Controllers\SegmentosParceirosController;
use App\Http\Controllers\TagPublicacaoController;
use App\Http\Controllers\TreinoController;
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
Route::apiResource('album', AlbumsController::class);
Route::apiResource('publicacao', PublicacaoController::class);
Route::apiResource('registro-exec-treino', RegistroExecTreinoController::class);
Route::apiResource('treino', TreinoController::class);
Route::apiResource('tag-publicacao', TagPublicacaoController::class);
Route::apiResource('rede-social', RedeSocialController::class);
Route::apiResource('indicacao', IndicacaoController::class);
Route::apiResource('file-user', FileUserController::class);
Route::apiResource('permissao', PermissoesController::class);
Route::apiResource('perfil-acesso', PerfilAcessosController::class);
Route::apiResource('publicidade', PublicidadesController::class);


