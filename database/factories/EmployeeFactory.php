<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'PersonId' => \App\Models\Person::factory(),
            'Number' => $this->faker->unique()->numerify('EMP-#####'),
            'EmployeeType' => $this->faker->randomElement(['Doctor', 'Nurse', 'Receptionist']),
            'Availability' => $this->faker->randomElement(['Full Time', 'Part Time']),
            'IsActive' => $this->faker->boolean(),
            'note' => $this->faker->sentence(),
        ];
    }
}
