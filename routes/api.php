<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#Laravel 7|8 JWT Authentication Tutorial: User Login & Signup API
#https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/

// Authentication APIs for Login, Register, User Profile, Token Refresh and Logout.
Route::post('/auth/register','AuthController@register');
//
Route::post('/auth/login','AuthController@login');

// Route Group
#Route::group(['middleware' => ['jwt.auth']], function () {
    
    //
    Route::get('/auth/logout','AuthController@logout');
    //
    Route::get('/auth/user-profile','AuthController@userProfile');
    //
    Route::post('/auth/refresh','AuthController@refresh');


    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/anuncios','AnuncioController');


    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/comodidades','ComodidadeController');
    //
    Route::get('/comodidades-oferecidas','ComodidadeController@comodidadeOferecida')->name('comodidades.oferecidas');


    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/usuarios','UsuarioController');
    //Retorno os anúncios de um usuário
    Route::get('/usuarios/{usuario}/anuncios','UsuarioController@usuarioAnuncio')->name('usuarios.anuncios');
    //
    Route::get('/usuarios/pesquisas/{nome}','UsuarioController@usuarioPesquisa');


    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/regras','RegraController');


    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/imoveis','ImovelController');
    
    
    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/tiposimoveis','TipoImovelController');


    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/tiposquartos','TipoQuartoController');

    
    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/imoveis','ImovelController');
    
#});

//
Route::get('/anuncios/publicados/{opcao}','AnuncioController@anuncioPublicado')->name('anuncios.publicados');
//
Route::get('/anuncios/{anuncio}/comodidades','AnuncioController@anuncioComodidade')->name('anuncios.comodidades');
//
Route::get('/anuncios/{anuncio}/regras','AnuncioController@anuncioRegra')->name('anuncios.regras');
//
Route::get('/anuncios/{anuncio}/mensagens','AnuncioController@anuncioMensagem')->name('anuncios.mensagens');
//
Route::get('/anuncios/pesquisas/{cidade}','AnuncioController@anuncioPesquisa')->name('anuncios.pesquisas');