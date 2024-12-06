<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PersonId' => Person::factory(), // Assuming you have a Person factory
            'Number' => $this->faker->unique()->numerify('P###'),
            'MedicalRecord' => $this->faker->text,
            'IsActive' => $this->faker->boolean,
            'Note' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
