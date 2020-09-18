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

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/anuncios','AnuncioController');
//
Route::get('/anuncios/publicados/{opcao}','AnuncioController@anuncioPublicado')->name('anuncios.publicados');
//
Route::get('/anuncios/{anuncio}/comodidades','AnuncioController@anuncioComodidade')->name('anuncios.comodidades');
//
Route::get('/anuncios/{anuncio}/regras','AnuncioController@anuncioRegra')->name('anuncios.regras');
//
Route::get('/anuncios/{anuncio}/mensagens','AnuncioController@anuncioMensagem')->name('anuncios.mensagens');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/comodidades','ComodidadeController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/imoveis','ImovelController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/regras','RegraController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/tiposimoveis','TipoImovelController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/tiposquartos','TipoQuartoController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/usuarios','UsuarioController');