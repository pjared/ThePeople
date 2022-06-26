<?php

namespace Database\Seeders;

use App\Models\OpinionTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpinionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'General',
            'Utah Senate',
        ];

        $descriptions = [
            'A general list of controversial opinions',
            'Controversial opinions for utah senate'
        ];

        for($i = 0; $i < 2; $i++) {
            $type = new OpinionTypes();
            $type->name = $names[$i];
            $type->description = $descriptions[$i];
            $type->save();
        }
    }
}
