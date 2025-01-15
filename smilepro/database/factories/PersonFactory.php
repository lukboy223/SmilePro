<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FirstName' => $this->faker->firstName,
            'MiddleName' => $this->faker->optional()->firstName,
            'LastName' => $this->faker->lastName,
            'BirthDate' => $this->faker->date,
            'IsActive' => $this->faker->boolean,
            'Note' => $this->faker->optional()->sentence,
        ];
    }
}
