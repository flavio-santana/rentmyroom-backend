<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\TipoQuarto;
use Faker\Generator as Faker;

$factory->define(TipoQuarto::class, function (Faker $faker) {
    return [

        //
        'descricao' => $faker->sentence($nbWords = 6, $variableNbWords = true),

        'publicado' => $faker->randomElement($array = array ('Sim','Nao'))
    ];
});
