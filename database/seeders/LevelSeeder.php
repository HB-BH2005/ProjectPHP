<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            [
                'nom' => 'Level 1',
                'description' => 'Level 1 introduces basic concepts, helping children build foundational skills in reading, writing, and recognition.',
            ],
            [
                'nom' => 'Level 2',
                'description' => 'Level 2 strengthens basic knowledge with simple sentences, vocabulary, and comprehension activities.',
            ],
            [
                'nom' => 'Level 3',
                'description' => 'Level 3 develops grammar understanding and encourages reading short stories and forming sentences.',
            ],
            [
                'nom' => 'Level 4',
                'description' => 'Level 4 focuses on expanding vocabulary and introducing more complex grammar structures.',
            ],
            [
                'nom' => 'Level 5',
                'description' => 'Level 5 enhances writing skills and reading comprehension through interactive texts and exercises.',
            ],
            [
                'nom' => 'Level 6',
                'description' => 'Level 6 prepares students for more advanced topics with structured writing and deeper reading analysis.',
            ],
            [
                'nom' => 'Level 7',
                'description' => 'Level 7 corresponds to 6th grade and supports students as they transition toward middle school with a focus on independence and comprehension.',
            ],
                        // Tu peux ajouter plus de niveaux pour chaque niveau de la même manière...

        ];

        foreach ($levels as $data) {
            Level::updateOrCreate(['nom' => $data['nom']], $data);
        }
    }
}

