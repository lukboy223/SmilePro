<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
   /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'PersonId' => \App\Models\Person::factory(),
            'Number' => $this->faker->unique()->numerify('PAT-#####'),
            'MedicalRecord' => $this->faker->sentence(),
            'IsActive' => $this->faker->boolean(),
            'note' => $this->faker->sentence(),
        ];
    }
}
