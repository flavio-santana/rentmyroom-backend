<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        //
        'nome' => $faker->name, 

        'genero' => $faker->randomElement($array = array ('F','M')),
        
        'dataNascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'cpf' => $faker->numerify('###########'),
        
        'telefone' => $faker->numerify('(##)#####-####'), // 'Hello 609'

        'email' => $faker->freeEmail,

        'senha' => $faker->numerify('######'),

        'publicado' => $faker->randomElement($array = array ('Sim','Nao'))

    ];
});
