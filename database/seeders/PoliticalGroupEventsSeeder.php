<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliticalGroupEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_names = [
            'Club Jared',
            'Meet The Jared',
        ];

        $event_desc = [
            '',
            'Wow! The legends are Real?',
        ];

        foreach($event_names as $i => $name) {
            DB::table('political_group_events')->insert([
                'political_group_id' => $i + 1,
                'event_name' => $name,
                'event_location' => 'My House',
                'event_description' => $event_desc[$i],
                'event_date' => Carbon::now()->addDays(rand(1, 50))
            ]);
        }
    }
}
