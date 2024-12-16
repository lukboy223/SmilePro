<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Communication;

class CommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Communication::factory(200)->create([
            'PatientId' => 1,
            'EmployeeId' => 1,
            'Message' => 'Sample message', // Provide a value for Message
    ]);

        //dd(Communication::factory(1)->make());
    }
}
