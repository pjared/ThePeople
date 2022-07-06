<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateBadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Loop through seeded candidates
        for($i = 1; $i <= 4; $i++) {
            //Loop through each opinion
            $leftLimit = 1;
            $rightLimit = 3;
            for($j = 0; $j < 5; $j++) {
                DB::table('candidate_badges')->insert([
                    'candidate_id' => $i,
                    'badge_id' => rand($leftLimit, $rightLimit),
                    'opinion_id' => $j + 1,
                ]);
                $leftLimit = $rightLimit + 1;
                $rightLimit = $rightLimit + 3;
            }
        }
    }
}
