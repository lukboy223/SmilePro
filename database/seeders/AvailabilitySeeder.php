<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Availability;


class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Availability::factory(200)->create([
            'EmployeeId' => 1, // Replace with an appropriate value
        ]);  
        //dd(Availability::factory(1)->make());
  
    }
}
