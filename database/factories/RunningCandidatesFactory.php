<?php

namespace Database\Factories;

use App\Models\Ballot;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RunningCandidates>
 */
class RunningCandidatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "candidate_id" => Candidate::factory(),
            "ballot_id" => Ballot::factory(),
            "entered_race_date" => now(),
            "show" => 0,
        ];
    }
}
