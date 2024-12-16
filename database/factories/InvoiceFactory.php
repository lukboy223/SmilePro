<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
   /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'PatientId' => \App\Models\Patient::factory(),
            'TreatmentId' => \App\Models\Treatment::factory(),
            'Number' => $this->faker->unique()->numerify('INV-#####'),
            'Date' => $this->faker->date(),
            'Amount' => $this->faker->randomFloat(2, 100, 1000),
            'Status' => $this->faker->randomElement(['Pending', 'Paid', 'Cancelled']),
            'Note' => $this->faker->sentence(),
            'IsActive' => $this->faker->boolean(),
        ];
    }
}
