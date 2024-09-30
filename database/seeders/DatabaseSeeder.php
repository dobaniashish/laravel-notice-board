<?php

namespace Database\Seeders;

use App\Models\Story;
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
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.net',
            'is_admin' => 1,
        ]);

        Story::factory(20)->create([
            'user_id' => $user->id,
        ]);
    }
}
