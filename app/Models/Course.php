<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_id',
        'subject_id',
        'nom',
        'content',
    ];

    // A course belongs to a level
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // A course belongs to a subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
