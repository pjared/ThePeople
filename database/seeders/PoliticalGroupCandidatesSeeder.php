<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliticalGroupCandidatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 2; $i++) {
            DB::table('political_group_candidate')->insert([
                'political_group_id' => 1,
                'candidate_id' => $i,
            ]);
        }
        for($i = 3; $i <= 4; $i++) {
            DB::table('political_group_candidate')->insert([
                'political_group_id' => 2,
                'candidate_id' => $i,
            ]);
        }
    }
}
