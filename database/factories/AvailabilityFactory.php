<?php

namespace Database\Factories;

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
            // Genereert een willekeurig werknemer ID tussen 1 en 100
            'EmployeeId' => $this->faker->numberBetween(1, 100),

            // Genereert een willekeurige datum voor de start van de beschikbaarheid
            'FormDate' => $this->faker->date(),

            // Genereert een willekeurige datum voor het einde van de beschikbaarheid
            'ToDate' => $this->faker->date(),

            // Genereert een willekeurige tijd (uur:minuut) voor de start van de beschikbaarheid
            'FormTime' => $this->faker->time('H:i'),

            // Genereert een willekeurige tijd (uur:minuut) voor het einde van de beschikbaarheid
            'ToTime' => $this->faker->time('H:i'),

            // Geeft willekeurig "Available" of "Unavailable" als status
            'Status' => $this->faker->randomElement(['Aanwezig', 'Afwezig', 'Verlof', 'Ziek']),
        ];
    }
}