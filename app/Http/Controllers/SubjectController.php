<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Level;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    // Admin : afficher tous les sujets (tableau admin)
    public function adminIndex()
    {
        $subjects = Subject::all(); // Récupère tous les sujets
        return view('admin.subjects.index', compact('subjects'));
    }

    // Public : afficher un seul sujet avec ses cours
    public function show($id)
    {
        $subject = Subject::with(['lessons' => function($query) {
            // Order lessons by the 'order' field
            $query->orderBy('order');
        }])->findOrFail($id);
    
        return view('subjects.show', compact('subject'));
    }
    

    // Admin : formulaire de création
    public function create()
    {
        $levels = Level::all();
        return view('admin.subjects.create', compact('levels'));
    }

    // Admin : enregistrer un nouveau sujet
    public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'cover' => 'nullable|image|max:2048',
        'level_id' => 'required|exists:levels,id',
    ]);

    $subject = new Subject();
    $subject->nom = $validated['nom'];
    $subject->level_id = $validated['level_id'];

    // If description is given, use it; otherwise, set a default description
    $subject->description = !empty($validated['description'])
        ? $validated['description']
        : 'No description provided for this subject.';

    // Handle the cover image upload or use default image
    if ($request->hasFile('cover')) {
        $subject->cover = $request->file('cover')->store('subjects', 'public');
    } else {
        $subject->cover = 'subjects/default.jpg';
    }

    $subject->save();

    return redirect()->route('levels.show', ['slug' => $subject->level->slug])->with('success', 'Subject created successfully!');

}



    // Admin : formulaire d’édition
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $levels = Level::all();
        return view('admin.subjects.edit', compact('subject', 'levels'));
    }

    // Admin : mise à jour
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover' => 'nullable|image|max:2048',
            'level_id' => 'required|exists:levels,id',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->nom = $request->nom;
        $subject->description = $request->description;
        $subject->level_id = $request->level_id;
        
        $subject->description = !empty($validated['description'])
        ? $validated['description']
        : 'No description provided for this subject.';

        // Check if a cover image is uploaded, otherwise keep the existing or set default
        if ($request->hasFile('cover')) {
            $subject->cover = $request->file('cover')->store('subjects', 'public');
        } else {
            // If no file is uploaded, keep the existing cover or set default
            if (!$subject->cover) {
                $subject->cover = 'subjects/default.jpg'; // Default image path
            }
        }

        $subject->save();

        return redirect()->route('admin.subjects.index')->with('success', 'Sujet mis à jour avec succès !');
    }

    // Admin : suppression
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('admin.subjects.index')->with('success', 'Sujet supprimé avec succès !');
    }
}
