<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(20);
        return response()->json($students);
    }

    public function enrollmentByMonth()
    {
        $data = Student::selectRaw("DATE_FORMAT(enrolled_at, '%Y-%m') as month, COUNT(*) as total")
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return response()->json($data);
    }

    public function stats()
    {
        return response()->json([
            'total'        => Student::count(),
            'male'         => Student::where('gender', 'Male')->count(),
            'female'       => Student::where('gender', 'Female')->count(),
            'by_year'      => Student::selectRaw('year_level, COUNT(*) as total')
                                ->groupBy('year_level')
                                ->orderBy('year_level')
                                ->get(),
        ]);
    }
}