<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgeSeeder extends Seeder
{

    public $opinion_badges = [
        1 => [
            array('Pro Life','This candidate leans towards Pro Life'),
            array('Pro Choice', 'This candidate leans towards Pro Choice'),
        ],
        2 => [
            array("War is only for defense",'This candidate leans towards war being only used in defense'),
            array("War is a viable option",'This candidate leans towards war being an option in foreign affairs'),
        ],
        3 => [
            array("Strict Gun Regulations",'This candidate leans towards Strict Gun Regulations'),
            array("Relaxed Gun Regulations",'This candidate leans towards Relaxed Gun Regulations'),
        ],
        4 => [
            array("Relaxed Immigration Standards",'This candidate leans towards Relaxed Immigration Standards'),
            array("Strict Immigration Standards",'This candidate leans towards Strict Immigration Standards'),
        ],
        5 => [
            array("Restrictions of Speech" ,'This candidate leans towards Restrictions of Speech'),
            array("Freedom of Speech",'This candidate leans towards Freedom of Speech'),  
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        foreach($this->opinion_badges as $badges) {
            foreach($badges as $badge) {
                DB::table('badges')->insert([
                    'name' => $badge[0],
                    'description' => $badge[1],
                    'opinion_id' => $count,
                ]);
            }          
            $count++; 
        }
    }
}
