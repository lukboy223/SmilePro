<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'personId' => \App\Models\Person::factory(),
            'Number' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'medicalRecord' => $this->faker->text(),
        ];
    }
}
