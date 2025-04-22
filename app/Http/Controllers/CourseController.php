<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Get all courses with their related level and subject
        $courses = Course::with(['level', 'subject'])->get();

        // Return the view and pass the data
        return view('users.my-courses', compact('courses'));
    }
}
