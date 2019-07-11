<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Endereco;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [

        'cidade' => $faker->city(),
        'logradouro' => $faker->streetName(),
        'bairro' => $faker->title(),
        'estado' => $faker->country(),
        'numero' => $faker->numberBetween(0, 100),
        'cliente_id' => $faker->numberBetween(0, 10),
    ];
});
