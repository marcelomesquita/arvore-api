<?php

use App\Banca;
use Illuminate\Database\Seeder;

class BancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banca::class, rand(5, 10))->create();
    }
}
