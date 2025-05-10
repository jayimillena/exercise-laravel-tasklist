<?php

namespace Database\Seeders;

use App\Models\{User, Task};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::factory(10)->create();
        User::factory(10)->create();
    }
}
