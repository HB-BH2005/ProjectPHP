<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'slug', // Ensure 'slug' is included if used in routes
    ];

    // A Level has many Subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    

    // Automatically generate and ensure uniqueness of the slug
    protected static function booted()
    {
        static::saving(function ($level) {
            // If no slug is provided, generate one from the 'nom' field
            if (empty($level->slug)) {
                $slug = Str::slug($level->nom);

                // Ensure the slug is unique
                $originalSlug = $slug;
                $count = 1;
                while (Level::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $count;
                    $count++;
                }

                $level->slug = $slug; // Assign the unique slug to the level
            }
        });
    }
    public function getCoverUrlAttribute()
{
    return $this->cover ? asset('storage/' . $this->cover) : null;
}   
}
