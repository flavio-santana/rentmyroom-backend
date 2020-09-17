<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comodidade;
use Faker\Generator as Faker;

$factory->define(Comodidade::class, function (Faker $faker) {
    return [
        //
        'descricao' => $faker->title,

        'publicado' => $faker->randomElement($array = array ('Sim','Nao')) // 'b'
    ];
});
