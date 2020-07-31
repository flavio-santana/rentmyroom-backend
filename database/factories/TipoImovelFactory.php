<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\TipoImovel;
use Faker\Generator as Faker;

$factory->define(TipoImovel::class, function (Faker $faker) {
    return [
        
        //
        'descricao' => $faker->sentence($nbWords = 6, $variableNbWords = true),

        'publicado' => $faker->randomElement($array = array ('Sim','Nao'))
    ];
});