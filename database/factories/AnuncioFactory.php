<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Anuncio;
use App\Model\Imovel;
use App\Model\TipoQuarto;
use Faker\Generator as Faker;

$factory->define(Anuncio::class, function (Faker $faker) {
    return [
        //
        'imovel_id' => function (){

            return Imovel::all()->random();
        
        },

        'tipoQuarto_id' => function (){

            return TipoQuarto::all()->random();
        
        },

        'titulo' => $faker->title,
        
        'descricao' => $faker->text,

        'valorAluguel' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1500),

        'dataDisponivel' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'publicado' => $faker->randomElement($array = array ('Sim','Nao')) // 'b'
    ];
});
