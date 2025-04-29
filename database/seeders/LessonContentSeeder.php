<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\LessonContent;

class LessonContentSeeder extends Seeder
{
    public function run()
    {
        // Récupérer la leçon "Alphabetic"
        $lesson = Lesson::where('title', 'Alphabetic')->first();

        if ($lesson) {
            LessonContent::create([
                'lesson_id' => $lesson->id,
                'content_type' => 'text',
                'text_content' => 'A a B b C c D d E e F f G g H h I i J j K k L l M m N n O o P p Q q R r S s T t U u V v W w X x Y y Z z',
                'content_url' => null,
                'order' => 0,
            ]);
        }
    }
}
