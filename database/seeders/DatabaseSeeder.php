<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appels des seeders
        $this->call([
            LevelSeeder::class,
            SubjectSeeder::class,
            LessonSeeder::class,
            LessonContentSeeder::class,


        ]);

        User::factory()->create([
            'username' => 'test3',
            'email' => 'test3@gmail.com',
            'password' => 'test32025',
        ]);
    }
}
