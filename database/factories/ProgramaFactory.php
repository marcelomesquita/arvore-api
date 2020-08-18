<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Banca;
use App\Orgao;
use App\Programa;
use Faker\Generator as Faker;

$factory->define(Programa::class, function (Faker $faker) {
    $bancas = Banca::pluck('id');
    $orgaos = Orgao::pluck('id');

    return [
        'nome' => $faker->sentence(3, true),
        'banca_id' => $bancas[$faker->numberBetween(1, count($bancas) - 1)],
        'orgao_id' => $orgaos[$faker->numberBetween(1, count($orgaos) - 1)]
    ];
});
