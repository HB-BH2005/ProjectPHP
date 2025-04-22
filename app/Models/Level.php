<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
    ];

    // A Level has many Subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    // A Level has many Courses
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
