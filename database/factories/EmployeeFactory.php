<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PersonId' => \App\Models\Person::factory(),
            'Number' => $this->faker->unique()->numerify('EMP###'),
            'EmployeeType' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'Availability' => $this->faker->text(100)
        ];
    }
}