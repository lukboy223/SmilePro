<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Availability;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Availability>
 */
class AvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'EmployeeId' => Employee::factory(), // Assuming you have an Employee model and factory
            'FormDate' => $this->faker->date(),
            'ToDate' => $this->faker->date(),
            'FormTime' => $this->faker->time(),
            'ToTime' => $this->faker->time(),
            'Status' => $this->faker->randomElement(['Leave', 'Present']),
        ];
    }
}
