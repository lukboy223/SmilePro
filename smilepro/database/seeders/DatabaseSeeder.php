<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Patient;
use App\Models\Person;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Patient::factory(60)->create();
        Person::factory(60)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin'),
        ]);
    }    
}
