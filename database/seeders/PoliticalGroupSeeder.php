<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliticalGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('political_groups')->insert([
            'name' => 'Lib Club',
            'location_id' => 2,
            'contact_email' => 'clublib@gmail.com',
            // 'site_link' => ,
            'slug' => 'lib-club',
        ]);

        DB::table('political_groups')->insert([
            'name' => 'Repub Club',
            'location_id' => 2,
            'contact_email' => 'clublib@gmail.com',
            'description' => 'JDSLKFJSDLKFJ',
            'slug' => 'lib-club',
        ]);
    }
}
