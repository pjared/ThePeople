<?php

namespace Database\Seeders;

use App\Models\PublicOfficePosition;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BallotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $random_office_id = [];
        // $random_office_id[1] = rand(1,4);
        // $random_office_id[2] = rand(10,33) % 4 + 1;
        // $random_office_id[3] = rand(2,5) - 1;
        // $random_office_id[4] = rand(-2,2) + 2;
        $today = Carbon::now();

        DB::table('ballots')->insert([
            'location_id' => 1,
            'office_id' => 1,
            'voting_date' => $today->addWeeks(rand(1, 52))->format('Y-m-d'),
            'slug' => 'Provo-Mayor',
        ]);

        DB::table('ballots')->insert([
            'location_id' => 2,
            'office_id' => 4,
            'voting_date' => $today->addWeeks(rand(1, 52))->format('Y-m-d'),
            'slug' => 'Utah-' . str_replace(' ', '-', PublicOfficePosition::find(4)->name),
        ]);
        // for($i = 2; $i <= 4; $i++) {
        //     DB::table('ballots')->insert([
        //         'location_id' => 2,
        //         'office_id' => $i,
        //         'voting_date' => $today->addWeeks(rand(1, 52))->format('Y-m-d'),
        //         'slug' => 'Utah-' . PublicOfficePosition::find($i)->name,
        //     ]);
        // }
    }
}
