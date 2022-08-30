<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\User;
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
        $user = User::find(1);
        for($i = 1; $i <= 3; $i++) {
            $candidate = Candidate::find($i);

            foreach($candidate->promises as $promise) {
                $promise->flagAsUser($user, 'This is a note', rand(0,3));
            }

            foreach($candidate->stances as $stance) {
                $stance->flagAsUser($user, 'This is a note', rand(0,3));
            }

            foreach($candidate->required_stances as $stance) {
                $stance->flagAsUser($user, 'This is a note', rand(0,3));
            }

            foreach($candidate->previous_positions as $position) {
                $position->flagAsUser($user, 'This is a note', rand(0,3));
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
