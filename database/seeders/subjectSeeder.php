<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        
        $subjects = [
            
            [
                'nom' => 'French Level 1',
                'description' => 'In this course, kids will learn the basics of French. They will start with the alphabet, how to pronounce and write the letters, and learn simple words. It’s a fun way to start speaking and writing in French!',
                'level_id' => 1,
                'cover' => 'subjects\DUVR5n72Zb9hruQN3qiFrC4efhsI56NqXaf9F478.jpg', 
            ],
          
            [
                'nom' => 'English Level 1',
                'description' => 'In this course, kids will learn the basics of English. They will start with the alphabet, how to pronounce and write the letters, and learn simple words. It’s a fun way to start speaking and writing in English!',
                'level_id' => 1, 
                'cover' => 'subjects/z2nDfkL7eJC1O7R2WXiJGWbpsvICKN7aqc2SMBGc.jpg', 
            ],
            // Tu peux ajouter plus de matières pour chaque niveau de la même manière...
        ];

        // Insérer ou mettre à jour les matières dans la base de données
        foreach ($subjects as $data) {
            Subject::updateOrCreate(['nom' => $data['nom']], $data); // Pour éviter les doublons si relancé
        }

       
    }
}
