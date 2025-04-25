<?php

namespace App\Http\Controllers;

use App\Models\CheatSheet;
use App\Models\Level;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CheatSheetController extends Controller
{
    public function index()
    {
        $cheatSheets = CheatSheet::all();
        return view('admin.cheat_sheets', compact('cheatSheets'));
    }

    public function create()
    {
        $levels = Level::all();
        $subjects = Subject::all();
        return view('admin.cheat_sheets.create', compact('levels', 'subjects'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'content' => 'required|string',
            'level_id' => 'required|exists:levels,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.cheat_sheets.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['nom', 'content', 'level_id', 'subject_id']);

        CheatSheet::create($data);

        return redirect()->route('admin.cheat_sheets.index')->with('success', 'Cheat Sheet added successfully.');
    }

    public function edit($id)
    {
        $cheatSheet = CheatSheet::findOrFail($id);
        $levels = Level::all();
        $subjects = Subject::all();
        return view('admin.cheat_sheets.edit', compact('cheatSheet', 'levels', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'content' => 'required|string',
            'level_id' => 'required|exists:levels,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.cheat_sheets.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $cheatSheet = CheatSheet::findOrFail($id);

        $data = $request->only(['nom', 'content', 'level_id', 'subject_id']);

        $cheatSheet->update($data);

        return redirect()->route('admin.cheat_sheets.index')->with('success', 'Cheat Sheet updated successfully.');
    }

    public function destroy($id)
    {
        $cheatSheet = CheatSheet::findOrFail($id);
        $cheatSheet->delete();

        return redirect()->route('admin.cheat_sheets.index')->with('success', 'Cheat Sheet deleted successfully.');
    }
}
