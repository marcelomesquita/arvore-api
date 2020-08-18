<?php

use App\Orgao;
use Illuminate\Database\Seeder;

class OrgaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Orgao::class, rand(5, 10))->create();
    }
}
