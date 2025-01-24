<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treatment>
 */
class TreatmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PatientId' => $this->faker->randomNumber(),
            'EmployeeId' => $this->faker->randomNumber(), 
            'Date' => $this->faker->dateTimeBetween('2020-01-01', '2024-12-31')->format('Y-m-d'),
            'Time' => $this->faker->time(),
            'treatmentType' => $this->faker->text(255),
            'description' => $this->faker->text(),
            'cost' => $this->faker->randomFloat(2, 0, 9999.99),
            'Status' => $this->faker->text(255),
        ];
    }
}