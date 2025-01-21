<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PatientId' => $this->faker->numberBetween(1, 100), // Random ID tussen 1 en 100
            'Rating' => $this->faker->numberBetween(1, 5), // Random rating tussen 1 en 5
            'PracticeEmail' => $this->faker->unique()->safeEmail(), // Unieke e-mail
            'PracticePhone' => $this->faker->phoneNumber(), // Random telefoonnummer
            'IsActive' => $this->faker->boolean(), // True of False
            'Note' => $this->faker->sentence(), // Random korte tekst

        ];
    }
}
