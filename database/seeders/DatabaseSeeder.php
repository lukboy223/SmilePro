<?php

namespace Database\Seeders;

use App\Models\employee;
use App\Models\Person;
use App\Models\Treatment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employee::factory()->count(100)->create();
        Treatment::factory()->count(100)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => '123@123.123',
        //     'password' => '12345678'
        // ]);
    }
}
