<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('/anuncios','AnuncioController');

Route::apiResource('/comodidades','ComodidadeController');

Route::apiResource('/imoveis','ImovelController');

Route::apiResource('/regras','RegraController');

Route::apiResource('/tiposimoveis','TipoImovelController');

Route::apiResource('/tiposquartos','TipoQuartoController');

Route::apiResource('/usuarios','UsuarioController');
