<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }

    public function create()
    {
        $levels = Level::all();
        $subjects = Subject::all();
        return view('admin.add_course', compact('levels', 'subjects'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'content' => 'required|string',
            'level_id' => 'required|exists:levels,id',
            'subject_id' => 'required|exists:subjects,id',
            'cover' => 'sometimes|file|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.courses.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['nom', 'content', 'level_id', 'subject_id']);

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
            $data['cover'] = $coverPath;
        }

        Course::create($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course added successfully.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $levels = Level::all();
        $subjects = Subject::all();
        return view('admin.courses.edit', compact('course', 'levels', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'content' => 'required|string',
            'level_id' => 'required|exists:levels,id',
            'subject_id' => 'required|exists:subjects,id',
            'cover' => 'sometimes|file|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.courses.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $course = Course::findOrFail($id);

        $data = $request->only(['nom', 'content', 'level_id', 'subject_id']);

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
            $data['cover'] = $coverPath;
        }

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}
