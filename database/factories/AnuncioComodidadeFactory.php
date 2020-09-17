<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\AnuncioComodidade;
use App\Model\Anuncio;
use App\Model\Comodidade;
use Faker\Generator as Faker;

$factory->define(AnuncioComodidade::class, function (Faker $faker) {
    return [
        //
        'anuncio_id' => function (){

            return Anuncio::all()->random();
        
        },

        'comodidade_id' => function (){

            return Comodidade::all()->random();
        
        },

        'publicado' => $faker->randomElement($array = array ('Sim','Nao')),
    ];
});
