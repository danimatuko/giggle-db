<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\JokesSeeder; // <-- Add this import

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            JokesSeeder::class,  // Call the seeder here
        ]);
    }

}
