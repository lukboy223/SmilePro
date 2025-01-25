<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'UserId' => \App\Models\User::factory(),
            'FirstName' => $this->faker->firstName,
            'MiddleName' => $this->faker->optional()->firstName(10),
            'LastName' => $this->faker->lastName,
            'DateOfBirth' => $this->faker->date
        ];}}