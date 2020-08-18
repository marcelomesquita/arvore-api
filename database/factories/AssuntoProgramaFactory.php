<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Assunto;
use App\Programa;
use App\AssuntoPrograma;
use Faker\Generator as Faker;

$factory->define(AssuntoPrograma::class, function (Faker $faker) {
    $assuntos = Assunto::pluck('id');
    $programas = Programa::pluck('id');

    return [
        'assunto_id' => $assuntos[$faker->numberBetween(1, count($assuntos) - 1)],
        'programa_id' => $programas[$faker->numberBetween(1, count($programas) - 1)],
    ];
});
