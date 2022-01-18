<?php

use Illuminate\Database\Seeder;

class RankingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Ranking::class, 20)->create();
    }
}
