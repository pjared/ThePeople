<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LawsSeeder extends Seeder
{
    private $law_names = [
        "The Roblox Initiative",
        "Teaching Monkeys to Play Minecraft",
        "The Waste More Taxpayer Money Initiative",
        "Make the Nieghborhood Pay For Golf Courses Act",
        "Teaching 1st Graders Astrophysics Act",
        "We know how to improve public schools, our kids go to private school",
    ];
    /**
     * This will seed : 
     *
     * @return void
     */
    public function run()
    {
        /*
        Schema::create('laws', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
        });
        */
        foreach ($this->law_names as $name) {
            DB::table('laws')->insert([
                'name' => $name,
                'link' => "www.google.com",
            ]);
        }

        foreach ($this->law_names as $name) {
            DB::table('candidate_law')->insert([
                'candidate_id' => rand(1, 4),
                'law_id' => rand(1, count($this->law_names)),
            ]);
        }
    }
}
