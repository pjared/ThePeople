<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for($i = 1; $i <= 4; ++$i) {
            for($j = 1; $j <= 5; ++$j) {
                DB::table('ballot_opinion')->insert([
                    'ballot_id' => $i,
                    'controversial_opinion_id' => $j,
                ]);
            }
        }
    }
}
