<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateStanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'candidate_id' | 'controversial_stance_id' | 'info' | 'link'
        //candidate_stances
        $num_candidates = 7;
        $num_cont_opins = 2;

        for($j = 1; $j <= $num_cont_opins; ++$j) {
            for($i = 1; $i <= $num_candidates; ++$i) {
                if($j == 1) {
                    $rand_min = 1;
                    $rand_max = 3;
                } else if ($j == 2) {
                    $rand_min = 4;
                    $rand_max = 7;
                }
                DB::table('candidate_stances')->insert([
                    'candidate_id' => $i,
                    'controversial_stance_id' => rand($rand_min, $rand_max),
                    'controversial_opinion_id' => $j,
                    'link' => "www.google.com",
                ]);
            }
        }
    }
}
