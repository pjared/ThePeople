<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidate = Candidate::firstWhere('user_id', 1);

        $event_names = [
            'Club Jared',
            'Meet The Jared',
        ];

        $event_desc = [
            '',
            'Wow! The legends are Real?',
        ];

        foreach($event_names as $i => $name) {
            DB::table('candidate_events')->insert([
                'candidate_id' => $candidate->id,
                'event_name' => $name,
                'event_location' => 'My House',
                'event_description' => $event_desc[$i],
                'event_date' => Carbon::now()->addDays(rand(1, 50))
            ]);
        }
    }
}
