<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Level;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    
    public function index()
    {
        $lessons = Lesson::all();
        return view('admin.lessons.index', compact('lessons'));
    }
    public function show($id)
    {
        $lesson = Lesson::with('contentLessons')->findOrFail($id);

        // Fetch the previous lesson (based on ID or order)
        $previousLesson = Lesson::where('id', '<', $lesson->id)->orderBy('id', 'desc')->first();

        // Fetch the next lesson (based on ID or order)
        $nextLesson = Lesson::where('id', '>', $lesson->id)->orderBy('id', 'asc')->first();

        return view('lessons.show', compact('lesson', 'previousLesson', 'nextLesson'));
    }
   
    public function create()
    {
        $subjects = Subject::all(); // Fetch all subjects
        $levels = Level::all(); // Fetch all levels
        return view('admin.lessons.create', compact('subjects', 'levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'subject_id' => 'required|exists:subjects,id',
            'level_id' => 'required|exists:levels,id',
            'order' => 'nullable|integer',
        ]);

        Lesson::create([
            'title' => $request->title,
            'description' => $request->description,
            'subject_id' => $request->subject_id,
            'level_id' => $request->level_id,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.lessons.index')->with('success', 'Lesson created successfully.');
    }

    

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        $levels = Level::all();
        return view('admin.lessons.edit', compact('lesson', 'levels'));
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level_id' => 'required|exists:levels,id',
            'order' => 'nullable|integer',
        ]);

        $lesson->update([
            'title' => $request->title,
            'description' => $request->description,
            'level_id' => $request->level_id,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.lessons.index', $lesson->subject_id)->with('success', 'Leçon mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $subjectId = $lesson->subject_id;
        $lesson->delete();

        return redirect()->route('admin.lessons.index', $subjectId)->with('success', 'Leçon supprimée avec succès.');
    }
}
