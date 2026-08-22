<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Auth\Listeners;
// use Illuminate\Broadcasting;
// use Illuminate\Cache\Console;
// use Illuminate\Cache\Events;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->cre;ate([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
