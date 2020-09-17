<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\AnuncioRegra;
use App\Model\Anuncio;
use App\Model\Regra;
use Faker\Generator as Faker;

$factory->define(AnuncioRegra::class, function (Faker $faker) {
    return [
        //
        'anuncio_id' => function (){

            return Anuncio::all()->random();
        
        },

        'regra_id' => function (){

            return Regra::all()->random();
        
        },

        'publicado' => $faker->randomElement($array = array ('Sim','Nao')),
    ];
});
