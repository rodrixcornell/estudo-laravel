<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pessoa;
use Faker\Generator as Faker;

$factory->define(Pessoa::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'cpf' => $faker->cpf(false),
        'user_id' => $faker->numberBetween(1, 2),
    ];
});
