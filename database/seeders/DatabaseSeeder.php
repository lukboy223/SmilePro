<?php

namespace Database\Seeders;

use App\Models\Availability;
use App\Models\Role;
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
        Availability::factory(200)->create();
        User::factory(100)->create();
        Employee::factory()->count(100)->create();
        Treatment::factory()->count(100)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'Admin@mail.com',
            'role_id' => 3,
            'password' => bcrypt('cookie123'),
            'email_verified_at' => now(),
        ]);
        
        User::factory()->create([
            'name' => 'Employee',
            'email' => 'Employee@mail.com',
            'role_id' => 2,
            'password' => bcrypt('cookie123'),
            'email_verified_at' => now(),
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

        Treatment::factory(100)->create();
    }
}
