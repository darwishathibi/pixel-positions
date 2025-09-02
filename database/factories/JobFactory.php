<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['RM 10 000', 'RM 12 000', 'RM 15 000', 'RM 18 000', 'RM 20 000']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
            'url' => fake()->url(),
            'featured' => 'false',
        ];
    }
}
