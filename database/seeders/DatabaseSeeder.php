<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'abhishek.das0023@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);

        $this->call([
            CarSeeder::class,
        ]);
    }
}
