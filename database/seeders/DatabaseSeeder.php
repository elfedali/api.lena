<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'webmaster@lena.ma',
        ]);
        // agency
        // \App\Models\Agency::factory(10)->create();
        // vehicle
        \App\Models\Vehicle::factory(10)->create();
    }
}
