<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\AnuncioMensagem;
use App\Model\Anuncio;
use App\Model\Usuario;
use Faker\Generator as Faker;

$factory->define(AnuncioMensagem::class, function (Faker $faker) {
    return [
        
        //
        'anuncio_id' => function (){

            return Anuncio::all()->random();
        
        },

        //
        'usuario_id' => function (){

            return Usuario::all()->random();
        
        },

        'mensagem' => $faker->text,

        'lida' => $faker->randomElement($array = array ('Sim','Nao')) 
        
    ];
});
