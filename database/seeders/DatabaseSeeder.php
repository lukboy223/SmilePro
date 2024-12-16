<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Availability;
use App\Models\Communication;
use App\Models\Employee;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

         Availability::factory(200)->create([
            'EmployeeId' => 1, // Replace with an appropriate value
        ]);  
        //dd(Availability::factory(1)->make());

        Communication::factory(200)->create([
            'PatientId' => 1,
            'EmployeeId' =>1,
        ]);

        Employee::factory(200)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
