<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'content_type',
        'order',
        'content_url',
        'text_content',
    ];

    // This method is correct; no changes needed for belongsTo relationship
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
