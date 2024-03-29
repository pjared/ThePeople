<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateOpinionsSeeder extends Seeder
{

    private $donor_names = [
        "Big Jared",
        "Standard Music",
    ];

    private $opinion_stances = [
        "Pro Jared",
        "Anti Jared",
        "Anti Remote",
        "Roblox > Minecraft",
        "Programming==Coding",
        "JS is a real language",
        "Variables should be in HTML",
    ];

    private $opinion_names = [
        "Thoughts on Jared",
        "Remote Work",
        "Clash of the titans",
        "Developing Software",
        "Thoughts on Javascript",
        "Should variables be in in HTML",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  candidate_id | donor_id
        $num_candidates = 4;
        /*
            "name" | "candidate_id" | "politician_id" | "link_found" | "is_controversial",
            "candidate_id" | "name" | "stance" | "link",
        */
        for($i = 0; $i < count($this->opinion_names); ++$i) {
            for($j = 5; $j <= $num_candidates + 5; ++$j) {
                DB::table('candidate_opinions')->insert([
                    'name' => $this->opinion_names[$i],
                    'candidate_id' => $j,
                    // 'link' => "www.google.com",
                    'stance' => $this->opinion_stances[$i],
                ]);
            }
        }
    }
}
