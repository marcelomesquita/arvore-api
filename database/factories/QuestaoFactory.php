<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Questao;
use App\Assunto;
use App\Banca;
use App\Orgao;
use Faker\Generator as Faker;

$factory->define(Questao::class, function (Faker $faker) {
    $assuntos = Assunto::pluck('id');
    $bancas = Banca::pluck('id');
    $orgaos = Orgao::pluck('id');

    return [
        'assunto_id' => $assuntos[$faker->numberBetween(1, count($assuntos) - 1)],
        'banca_id' => $bancas[$faker->numberBetween(1, count($bancas) - 1)],
        'orgao_id' => $orgaos[$faker->numberBetween(1, count($orgaos) - 1)]
    ];
});
