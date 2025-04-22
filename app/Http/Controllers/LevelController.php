<?php

namespace App\Http\Controllers;

use App\Models\Level; // Import the Level model
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function show($level)
    {
        // Retrieve the level by slug
        $level = Level::where('slug', $level)->first();
        
        if (!$level) {
            abort(404); // Level not found, return 404 error
        }

        // Get the subjects related to this level
        $subjects = $level->subjects; // Assuming Level has a `subjects()` relationship

        // Check if the view exists for the given level (optional dynamic view rendering)
        $viewName = "levels.$level->slug"; // The view name will be based on the level's slug

        if (view()->exists($viewName)) {
            // Render the dynamic view if it exists
            return view($viewName, compact('level', 'subjects'));
        }

        // If the specific view doesn't exist, return a 404 error
        return view('levels.subjects-by-level', compact('level', 'subjects'));
        
    }
    public function index()
{
    $levels = Level::all(); // récupère tous les niveaux depuis la base de données
    return view('levels.index', compact('levels'));
}

}
