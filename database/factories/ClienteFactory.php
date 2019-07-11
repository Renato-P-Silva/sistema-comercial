<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [

        'nome' => $faker->name(),
        'cpf' => $faker->numberBetween(00000000000,99999999999),
        'email' => $faker->email(),
        'telefone'=>$faker->numberBetween(000000000,999999999),
    ];
});
