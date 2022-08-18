<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManualCandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidate = Candidate::factory()->create();

        DB::table('manual_candidates')->insert([
            'candidate_id' => $candidate->id,
            'note' => rand(1,4),
            // 'sour' => rand(1,4),
        ]);
    }
}
