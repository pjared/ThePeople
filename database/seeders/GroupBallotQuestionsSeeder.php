<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupBallotQuestionsSeeder extends Seeder
{
    public $questions = [
        'Who is Jared Pacheco?',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->questions as $question) {
            DB::table('group_ballot_questions')->insert([
                'question' => $question,
                'political_group_id' => rand(1,2),
                'ballot_id' => rand(1,2),
            ]);
        }
    }
}
