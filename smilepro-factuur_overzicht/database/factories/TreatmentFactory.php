<?php

namespace Database\Factories;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Treatment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'PatientId' => \App\Models\Patient::factory(),
            'EmployeeId' => \App\Models\Employee::factory(),
            'Date' => $this->faker->date(),
            'Time' => $this->faker->time(),
            'TreatmentType' => $this->faker->randomElement(['Consultation', 'Surgery', 'Medication']),
            'Description' => $this->faker->sentence(),
            'Cost' => $this->faker->randomFloat(2, 0, 1000),
            'Status' => $this->faker->randomElement(['Pending', 'Completed', 'Cancelled']),
            'Note' => $this->faker->sentence(),
            'IsActive' => $this->faker->boolean(),
        ];
    }
}
