<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\CandidateDonors;
use Carbon\Carbon;
use Filament\Forms\Components\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UTDonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/seed-data/ut_donors.json";
        $donors_json = json_decode(file_get_contents($path), true);
        foreach($donors_json as $name => $donor) {
            //Get the candidate through name
            $candidate = Candidate::firstWhere('name', $name);
            if (! $candidate) {
                echo "Could not find: \"" . $name . "\"\n";
                continue;
            }
            // Else make them a donors piece
            CandidateDonors::create([
                'candidate_id' => $candidate->id,
                'top_5_donors' => json_encode($donor['top_donors']),
                'top_5_states' => array_key_exists('top_states', $donor) ? json_encode($donor['top_states']) : "[]",
                'top_5_groups' => json_encode($donor['top_groups']),
                'total' => $donor['total'],
                'last_fec_updated_at' => Carbon::now()->subDays(5),
            ]);
        }
    }
}
