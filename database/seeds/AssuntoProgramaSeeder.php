<?php

use App\AssuntoPrograma;
use Illuminate\Database\Seeder;

class AssuntoProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AssuntoPrograma::class, rand(5, 10))->create();
    }
}
