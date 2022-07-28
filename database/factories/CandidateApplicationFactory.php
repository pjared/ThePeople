<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CandidateApplication;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CandidateApplicationFactory extends Factory
{
    protected $model = CandidateApplication::class;
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
            "email" => $this->faker->unique()->safeEmail(),
            'phone_number' => '1234567890',
            "office_name" => 'Senate',
            "state" => 'Utah',
            "location" => 'District 23',
            "status" => 'submitted',
        ];
    }
}
