<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//
Route::get('/comodidades-oferecidas','ComodidadeController@comodidadeOferecida')->name('comodidades.oferecidas');


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
//Retorno os anúncios de um usuário
Route::get('/usuarios/{usuario}/anuncios','UsuarioController@usuarioAnuncio')->name('usuarios.anuncios');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
#Route::apiResource('/anuncios-comodidades ','AnuncioComodidadeController');
