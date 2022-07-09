<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControversialOpinionsSeeder extends Seeder
{
    private $opinion_names = [
        "Climate Change",
        "Abortion",
        "Gun Control",
        "Immigration",
        "1st Amendment Speech Rights",
    ];

    private $opinion_desc = [
        "War is when two nations engage in conflict.",
        "Abortion is whether or not a women can or cannot abort her pregnancy.",
        "Gun Control is the debate over how much control should be exerted over the 2nd amendment.",
        "Immigration is the debate over how to let citizens of other nations enter into the United States.",
        "1st Amendment Rights is the debate of what speech the first amendment applies to.",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'name' | 'description', // A description of what it means
        // controversial_opinions
        for($i = 0; $i < count($this->opinion_names); ++$i) {
            DB::table('controversial_opinions')->insert([
                'name' => $this->opinion_names[$i],
                'description' => $this->opinion_desc[$i],
                'votes' => 10000,
            ]);
        }
    }
}
