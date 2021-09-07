<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CidadeController;
use App\Http\Controllers\api\GrupoController;
use App\Http\Controllers\api\CampanhaController;
use App\Http\Controllers\api\ProdutoController;
use App\Http\Controllers\api\DescontoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('cidades','App\Http\Controllers\api\CidadeController');

Route::apiResource('grupos','App\Http\Controllers\api\GrupoController');

Route::apiResource('campanhas','App\Http\Controllers\api\CampanhaController');

Route::apiResource('produtos','App\Http\Controllers\api\ProdutoController');

Route::apiResource('descontos','App\Http\Controllers\api\DescontoController');
