<?php
namespace App\Http\Controllers;

use App\Models\Course; // Import the Course model
use App\Models\Level;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        $levels = Level::all(); // Fetch all levels for the dropdown
        return view('courses.create', compact('levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level_id' => 'required|exists:levels,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->level_id = $request->level_id;

        if ($request->hasFile('cover')) {
            $course->cover = $request->file('cover')->store('covers', 'public');
        }

        $course->save();

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    public function index(Request $request)
    {
        $query = $request->query('query'); // Handle search queries
        if ($query) {
            $courses = Course::where('name', 'LIKE', "%$query%")
                ->orWhere('description', 'LIKE', "%$query%")
                ->get();
        } else {
            $courses = Course::all(); // Fetch all courses if no query is provided
        }

        return view('admin.courses.index', compact('courses'));
    }
}