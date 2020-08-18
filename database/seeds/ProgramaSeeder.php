<?php

use App\Programa;
use App\Assunto;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Programa::class, rand(5, 10))->create();
    }
}
