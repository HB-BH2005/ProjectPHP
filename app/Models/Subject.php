<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_id',
        'nom',
        'description',
        'cover',
    ];

    // A subject belongs to a level
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // A subject has many courses
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
