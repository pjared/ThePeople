<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControversialOpinionsSeeder extends Seeder
{

    private $opinion_stances_war = [
        "Viable Option",
        "Last Option",
        "Only for defense"
    ];

    private $opinion_stances_war_desc = [
        "War is an option for dealing when dealing with foreign affairs",
        "War should only be used in when completely necessary",
        "War should only be used as a means of defense, another side must strike first",
    ];

    private $opinion_stances_abortion = [
        "Pro Choice",
        "Pro Choice - Up to a development stage",
        "Pro Life",
        "Pro Life - With Border Cases",
    ];

    private $opinion_stances_abortion_desc = [
        "It is a women's choice to deicide upon for abortion",
        "At any time before a certain stage is reached in pregnancy a women can decide for an abortion",
        "Abortion should not be used for any point in a women's pregnancy, except when it threatens the mothers life",
        "Abortion should only be allowed for cases such as rape or incest",
    ];

    private $opinion_names = [
        "War",
        "Abortion",
    ];

    private $opinion_desc = [
        "War is when two nations fight through means to acheive some obscure goal",
        "Abortion is whether or not a women can or cannot abort her pregnancy"
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
            ]);
        }

        //'name' | 'controversial_opionion_id' | 'description',
        //controversial_stances 
        for($i = 0; $i < count($this->opinion_stances_war); ++$i) {
            DB::table('controversial_stances')->insert([
                'name' => $this->opinion_stances_war[$i],
                'controversial_opinion_id' => 1,
                'description' => $this->opinion_stances_war_desc[$i],
            ]);
        }

        for($i = 0; $i < count($this->opinion_stances_abortion); ++$i) {
            DB::table('controversial_stances')->insert([
                'name' => $this->opinion_stances_abortion[$i],
                'controversial_opinion_id' => 2,
                'description' => $this->opinion_stances_abortion_desc[$i],
            ]);
        }

    }
}
