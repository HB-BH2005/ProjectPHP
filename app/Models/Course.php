<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'level_id', 'cover'];

    // A Course belongs to a Level
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
?>