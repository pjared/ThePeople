<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFlagSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 3; $i++) {

            // 'promise'
            //'required-stance'
            //'controversial-stance'
            //'position'
            $candidate = Candidate::find($i);

            foreach($candidate->promises as $promise) {
                DB::table('user_flags')->insert([
                    'user_id' => 1,
                    'candidate_id' => $i,
                    'ballot_id' => 4,
                    'type' => 'promise',
                    'type_id' => $promise->id,
                    'flag_type' => rand(1,3),
                    'note' => 'This is a note',
                ]);
            }

            foreach($candidate->stances as $stance) {
                $opinion_id = $stance->controversial_opinion_id;
                DB::table('user_flags')->insert([
                    'user_id' => 1,
                    'candidate_id' => $i,
                    'ballot_id' => 4,
                    'type' => $opinion_id . '-controversial-stance',
                    'type_id' => $stance->id,
                    'flag_type' => rand(1,3),
                    'note' => 'This is a note',
                ]);
            }

            foreach($candidate->required_stances as $stance) {
                $opinion_id = $stance->required_stance_id;
                DB::table('user_flags')->insert([
                    'user_id' => 1,
                    'candidate_id' => $i,
                    'ballot_id' => 4,
                    'type' => $opinion_id . 'required-stance',
                    'type_id' => $stance->id,
                    'flag_type' => rand(1,3),
                    'note' => 'This is a note',
                ]);
            }

            foreach($candidate->previous_positions as $position) {
                DB::table('user_flags')->insert([
                    'user_id' => 1,
                    'candidate_id' => $i,
                    'ballot_id' => 4,
                    'type' => 'position',
                    'type_id' => $position->id,
                    'flag_type' => rand(1,3),
                    'note' => 'This is a note',
                ]);
            }

            // DB::table('user_flags')->insert([
            //     'user_id' => 1,
            //     'candidate_id' => $i,
            //     'ballot_id' => 4,
            //     'type' => 2,
            //     'type_id' => 2,
            //     'flag_type' => 2,
            //     'note' => 'This is a note',
            // ]);
        }

    }
}
