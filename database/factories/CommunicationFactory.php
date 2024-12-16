<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Communication>
 */
class CommunicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PatientId' => $this->faker->numberBetween(1, 10), // Replace with actual logic
            'EmployeeId' => $this->faker->numberBetween(1, 10), // Replace with actual logic
            'Message' => $this->faker->sentence,  // Generate a random sentence for the Message
            'SentDate' => $this->faker->time('H:i:s'), // Random time for SentDate
            'IsActive' => $this->faker->boolean, // Random boolean for IsActive
            'Note' => $this->faker->optional()->sentence, // Optional note field
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
