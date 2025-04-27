<?php
namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class LessonContentController extends Controller
{
    // Display all lesson contents
    public function index()
    {
        $lessonContents = LessonContent::all(); // Fetch all lesson contents
        return view('admin.lesson_contents.index', compact('lessonContents'));
    }

    // Display a single lesson content
    public function show($id)
    {
        $lessonContent = LessonContent::findOrFail($id); // Find the lesson content by ID
        return view('lessons.show', compact('lessonContent')); // Show the lesson content details
    }

    // Show the form to create a new lesson content
    public function create()
    {
        $lessons = Lesson::all(); // Fetch all lessons

        // Check if there are no lessons
        if ($lessons->isEmpty()) {
            return redirect()->route('admin.lessons.index')->with('error', 'No lessons available. Please create a lesson first.');
        }

        return view('admin.lesson_contents.create', compact('lessons')); // Show the create form
    }

    // Store a new lesson content
    public function store(Request $request)
{
    try {
        // Validate the request data
        $validatedData = $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'content_type' => 'required|string',
            'order' => 'nullable|integer',
            'content_url' => 'nullable|file|mimes:pdf,mp4,mp3,jpg,jpeg,png|max:51200',
            'text_content' => 'nullable|string',
        ]);

        $contentUrl = null;

        // Check if a file is uploaded
        if ($request->hasFile('content_url')) {

            $file = $request->file('content_url');
            Log::info('File uploaded: ' . $file->getClientOriginalName());
            Log::info('File size: ' . $file->getSize() . ' bytes');
            Log::info('File MIME type: ' . $file->getMimeType());

            if ($file->isValid()) {
                // Store the file and get the path
                $contentUrl = $file->store('lesson_contents', 'public');
                Log::info('File successfully stored at: ' . $contentUrl);
            } else {
                Log::error('File is invalid.');
                throw new \Exception('The content url failed to upload.');
            }
        } else {
            Log::warning('No file uploaded.');
        }

        // Create the lesson content
        LessonContent::create([
            'lesson_id' => $validatedData['lesson_id'],
            'content_type' => $validatedData['content_type'],
            'order' => $validatedData['order'] ?? 0,
            'content_url' => $contentUrl,
            'text_content' => $validatedData['text_content'] ?? null,
        ]);

        // Return success response
        return redirect()->back()->with('success', 'Lesson content created successfully.');

    } catch (\Exception $e) {
        Log::error('Lesson content creation failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    }
}
    
    
    // Update an existing lesson content
    public function update(Request $request, $id)
    {
        $lessonContent = LessonContent::findOrFail($id);

        $request->validate([
            'content_type' => 'required|string|in:text,pdf,video,audio,image,cheatsheet',
            'content_url' => 'nullable|file|required_if:content_type,pdf,video,audio,image,cheatsheet',
            'text_content' => 'nullable|string|required_if:content_type,text',
            'order' => 'nullable|integer',
        ]);

        DB::beginTransaction();

        try {
            if (in_array($request->content_type, ['pdf', 'video', 'audio', 'image', 'cheatsheet'])) {
                if ($request->hasFile('content_url')) {
                    $file = $request->file('content_url');
                    $filename = Str::uuid()->toString() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('uploads/lesson_contents', $filename, 'public');
                    $lessonContent->content_url = $path;
                }
                $lessonContent->text_content = null;
            } elseif ($request->content_type === 'text') {
                $lessonContent->text_content = $request->text_content;
                $lessonContent->content_url = null;
            }

            $lessonContent->content_type = $request->content_type;
            $lessonContent->order = $request->order ?? 0;

            $lessonContent->save();

            DB::commit();

            return redirect()->route('admin.lesson_contents.index')
                ->with('success', 'Lesson content updated successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Failed to update lesson content: ' . $e->getMessage());
        }
    }

    // Delete a lesson content
    public function destroy($id)
    {
        $lessonContent = LessonContent::findOrFail($id);
        $lessonContent->delete();

        return redirect()->route('admin.lesson_contents.index')->with('success', 'Lesson content deleted successfully.');
    }
}
