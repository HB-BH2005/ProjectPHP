<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

    


class LevelController extends Controller
{   // Temporarily commented out until admin role is implemented
    // public function __construct()
    // {
    //     $this->middleware('admin'); // Protect all admin routes with the admin middleware
    // }
    // Show levels on the public site
    public function index()
    {
        $levels = Level::all(); // Fetch all levels
        return view('levels.index', compact('levels')); // PUBLIC view
    }

    // Show levels in the admin panel
    public function adminIndex()
    {
        $levels = Level::all(); // Fetch all levels
        return view('admin.levels.index', compact('levels')); // ADMIN view
    }

    // Show a specific level by slug
    public function show($slug)
    {
        $level = Level::where('slug', $slug)->first();

        if (!$level) {
            abort(404); // Return a 404 error if the level is not found
        }

        $subjects = $level->subjects; // Assuming Level has a `subjects()` relationship

        return view('levels.show', compact('level', 'subjects')); // Pass level and subjects to the view
    }


    // Show the form to create a new level
    public function create()
    {
        return view('admin.levels.create'); // Show the form to create a new level
    }

    // Store a newly created level in the database
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new level with a unique slug
        $level = new Level();
        $level->nom = $request->nom;
        $level->description = $request->description;
        $level->slug = Str::slug($request->nom, '-'); // Generate a slug based on the level's name
        $level->save();

        return redirect()->route('admin.levels.index')->with('success', 'Level created successfully!');
    }

    // Show the form to edit an existing level
    public function edit($id)
    {
        $level = Level::findOrFail($id); // Find the level by ID
        return view('admin.levels.edit', compact('level')); // Show the form to edit the level
    }

    // Update the specified level in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $level = Level::findOrFail($id); // Find the level by ID
        $level->nom = $request->nom;
        $level->description = $request->description;
        $level->slug = Str::slug($request->nom, '-'); // Update the slug based on the level's name
        $level->save();

        return redirect()->route('admin.levels.index')->with('success', 'Level updated successfully!');
    }

    // Delete the specified level from the database
    public function destroy($id)
    {
        $level = Level::findOrFail($id); // Find the level by ID
        $level->delete(); // Delete the level

        return redirect()->route('admin.levels.index')->with('success', 'Level deleted successfully!');
    }
}
