<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Orgao;
use Faker\Generator as Faker;

$factory->define(Orgao::class, function (Faker $faker) {
    return [
        'nome' => $faker->sentence(3, true)
    ];
});
