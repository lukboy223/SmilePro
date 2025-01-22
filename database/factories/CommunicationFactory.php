<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Communication;

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
            'PatientId' => $this->faker->numberBetween(1, 100),
            'EmployeeId' => $this->faker->numberBetween(1, 100),
            'Message' => $this->faker->text(),
            'SentDate' => $this->faker->dateTime(),
        ];
        
    }
}
