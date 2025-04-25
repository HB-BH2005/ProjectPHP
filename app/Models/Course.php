<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'content', 'level_id', 'subject_id', 'cover'];

    // A Course belongs to a Level
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // A Course belongs to a Subject
    public function subject()
    {
        return $this->belongsTo(\App\Models\Subject::class);
    }
}
?>