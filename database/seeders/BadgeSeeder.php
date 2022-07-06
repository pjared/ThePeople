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
            array('Abortion - Nuetral', 'This candidate is neutral towards stances concerning abortion'),
        ],
        2 => [
            array("Only for defense",'This candidate leans towards war being only used in defense'),
            array("Viable Option",'This candidate leans towards war being an option in foreign affairs'),
            array("War - Nuetral",'This candidate is neutral towards foreign policy in war'),
        ],
        3 => [
            array("Strict Regulations",'This candidate leans towards Strict Gun Regulations'),
            array("Relaxed Regulations",'This candidate leans towards Relaxed Gun Regulations'),
            array("Gun Control - Nuetral",'This candidate is neutral on gun regulation'),
        ],
        4 => [
            array("Relaxed Policy",'This candidate leans towards Relaxed Immigration Policies'),
            array("Strict Policies", 'This candidate leans towards Strict Immigration Policies'),
            array("Immigration - Nuetral", 'This candidate is neutral towards stances concerning immigration policies'),
        ],
        5 => [
            array("Limiting Protections", 'This candidate leans towards Restrictions of Speech'),
            array("Limitless Protections", 'This candidate leans towards Freedom of Speech'),  
            array("1st Amendment Rights - Nuetral", 'This candidate is neutral towards stances concerning 1st Amendment Rights'),  
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
