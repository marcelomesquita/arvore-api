<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Programa;
use Faker\Generator as Faker;

$factory->define(Programa::class, function (Faker $faker) {
    return [
        'nome' => $faker->sentence(3, true)
    ];
});
