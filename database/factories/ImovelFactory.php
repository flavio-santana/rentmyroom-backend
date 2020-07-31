<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Imovel;
use App\Model\TipoImovel;
use App\Model\Usuario;
use Faker\Generator as Faker;

$factory->define(Imovel::class, function (Faker $faker) {
    return [
        
        //
        'tipoImovel_id' => function (){

            return TipoImovel::all()->random();
        
        },

        //
        'usuario_id' => function (){

            return Usuario::all()->random();
        
        },

        'cep' => $faker->numerify('########'),

        'endereco' => $faker->streetAddress,

        'bairro' => $faker->streetName,

        'cidade' => $faker->city,

        'uf' => $faker->stateAbbr,

        'qtdeQuartos' => $faker->randomDigit,

        'qtdeBanheiros' => $faker->randomElement($array = array (1,2,3)),

        'publicado' => $faker->randomElement($array = array ('Sim','Nao')) 
    ];
});