<?php

namespace Database\Seeders;

use App\Models\Communication;
use App\Models\Role;
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
        User::factory(100)->create();
        Communication::factory(100)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Role::factory()->create([
            'name' => 'Patient'
        ]);
        Role::factory()->create([
            'name' => 'Employee'
        ]);
        Role::factory()->create([
            'name' => 'Admin'
        ]);
    }
}
