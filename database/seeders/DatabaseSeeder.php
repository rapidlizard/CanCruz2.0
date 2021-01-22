<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->admin()->create();
        \App\Models\Reservation::factory()->count(10)->create();
    }
}
