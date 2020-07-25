<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\UsuarioRepositoryInterface',
            'App\Repositories\UsuariotRepository'
        );

        $this->app->bind(
            'App\Repositories\TipoQuartoRepositoryInterface',
            'App\Repositories\TipoQuartotRepository'
        );

        $this->app->bind(
            'App\Repositories\TipoImovelRepositoryInterface',
            'App\Repositories\TipoImovelRepository'
        );

        $this->app->bind(
            'App\Repositories\RegraRepositoryInterface',
            'App\Repositories\RegraRepository'
        );

        $this->app->bind(
            'App\Repositories\ImovelRepositoryInterface',
            'App\Repositories\ImovelRepository'
        );

        $this->app->bind(
            'App\Repositories\ComodidadeRepositoryInterface',
            'App\Repositories\ComodidadeRepository'
        );

        $this->app->bind(
            'App\Repositories\AnuncioRegraRepositoryInterface',
            'App\Repositories\AnuncioRegraRepository'
        );

        $this->app->bind(
            'App\Repositories\AnuncioComodidadeRepositoryInterface',
            'App\Repositories\AnuncioComodidadeRepository'
        );

        $this->app->bind(
            'App\Repositories\AnuncioRepositoryInterface',
            'App\Repositories\AnuncioRepository'
        );
    }
}