<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Optionally seed the User model
        // \App\Models\User::factory(10)->create();

        // Seed the CarouselModel
        \App\Models\CarouselItems::factory()->count(10)->create(); // Adjust the count as needed
    }
}
