<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Banca;
use Faker\Generator as Faker;

$factory->define(Banca::class, function (Faker $faker) {
    return [
        'nome' => $faker->sentence(3, true)
    ];
});
