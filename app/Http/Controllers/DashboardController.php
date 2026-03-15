<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\SchoolDay;

class DashboardController extends Controller
{
    public function summary()
    {
        return response()->json([
            'total_students' => Student::count(),
            'total_courses'  => Course::count(),
            'total_days'     => SchoolDay::where('type', 'Class')->count(),
            'avg_attendance' => round(SchoolDay::where('type', 'Class')->avg('attendance_count')),
        ]);
    }

    public function attendance()
    {
        $data = SchoolDay::select('date', 'type', 'label', 'attendance_count')
            ->orderBy('date')
            ->get();

        return response()->json($data);
    }
}