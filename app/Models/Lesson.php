<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'subject_id',
        'level_id',
        'order',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // Updated method to follow naming conventions (plural for hasMany relationship)
    public function contentLessons()
    {
        return $this->hasMany(LessonContent::class, 'lesson_id', 'id');
    }
}
