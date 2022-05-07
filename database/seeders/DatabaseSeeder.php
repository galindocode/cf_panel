<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'email' => "admin@gmail.com",
            'password' => bcrypt('1234567890'),
        ]);
        \App\Models\Categories::factory(10)->create();
        \App\Models\Videos::factory(40)->create();
    }
}
