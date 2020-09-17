<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Regra;
use Faker\Generator as Faker;

$factory->define(Regra::class, function (Faker $faker) {
    return [
        //
        'descricao' => $faker->title,

        'publicado' => $faker->randomElement($array = array ('Sim','Nao')) // 'b'
    ];
});
