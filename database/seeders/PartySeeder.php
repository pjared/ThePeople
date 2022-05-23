<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartySeeder extends Seeder
{
    private $names = [
        "Conservative",
        "Lib",
        "Club Jared",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // "name",
        // "other_info"
        foreach ($this->names as $name) {
            DB::table('political_parties')->insert([
                'name' => $name,
            ]);
        }
    }
}
