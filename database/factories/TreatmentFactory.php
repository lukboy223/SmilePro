<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'PatientId' => \App\Models\Patient::factory(),
            'EmployeeId' => \App\Models\Employee::factory(),
            'Date' => $this->faker->date(),
            'Time' => $this->faker->time(),
            'treatmentType' => $this->faker->text(255),
            'description' => $this->faker->text(),
            'cost' => $this->faker->randomFloat(2, 0, 9999.99),
            'Status' => $this->faker->text(255),
        ];
    }
}
