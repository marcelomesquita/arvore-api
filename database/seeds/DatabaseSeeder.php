<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AssuntoSeeder::class);
        $this->call(BancaSeeder::class);
        $this->call(OrgaoSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(AssuntoProgramaSeeder::class);
        $this->call(QuestaoSeeder::class);
    }
}
