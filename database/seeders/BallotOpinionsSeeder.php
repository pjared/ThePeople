<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BallotOpinionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 2; $i <= 3; ++$i) {
            for($j = 1; $j <= 5; ++$j) {
                DB::table('ballot_opinion')->insert([
                    'ballot_id' => $i,
                    'controversial_opinion_id' => $j,
                ]);
            }
        }
    }
}
