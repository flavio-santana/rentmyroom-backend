<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#http://hub4dev.com.br/2019/08/19/laravel-passaport-criando-uma-api-de-autenticacao-restful/

//
Route::get('/', 'IndexController@index');

//
Route::get('/login', 'IndexController@login');

//
Route::get('/anuncios', 'IndexController@anuncio');
