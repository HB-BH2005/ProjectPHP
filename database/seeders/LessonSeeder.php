<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Level;

class LessonSeeder extends Seeder
{
    public function run()
    {
        // Récupérer le niveau 1
        $level = Level::where('nom', 'Level 1')->first();



        // Récupérer le sujet English
        $subject = Subject::where('nom', 'English')->where('level_id', $level->id)->first();

        // Créer la leçon si level et subject existent
        if ($level && $subject) {
            Lesson::create([
                'title' => 'Alphabetic',
                'description' => 'In this course, kids will learn the basics of English. They will start with the alphabet, how to pronounce and write the letters, and learn simple words. It’s a fun way to start speaking and writing in English!',
                'subject_id' => $subject->id,
                'level_id' => $level->id,
                'order' => 1,
            ]);
        }
    }
}
