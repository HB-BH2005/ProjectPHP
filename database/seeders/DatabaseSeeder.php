<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $this->call(LevelSeeder::class);
        // $this->call(SubjectSeeder::class);
        User::factory()->create([
            'username' => 'test3',
            'email' => 'test3@gmail.com',
            'password' => 'test32025'
        ]);
    }
}
