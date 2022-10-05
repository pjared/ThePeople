<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'user_id' => User::factory(),
            "dob" => now(),
            "contact_email" => $this->faker->unique()->safeEmail(),
            'phone_number' => '1234567890',
            "state" => 'Utah',
            'bio' => 'A Bio',
            "signup_date" => now(),
            "party_name" => 'independant',
        ];
    }
}
