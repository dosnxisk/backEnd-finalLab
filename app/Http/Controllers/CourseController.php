<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function distribution()
    {
        $data = Student::selectRaw('course_code, COUNT(*) as total')
            ->groupBy('course_code')
            ->orderByDesc('total')
            ->get();

        return response()->json($data);
    }
}