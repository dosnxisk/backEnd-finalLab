<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);

    Route::get('/students',                  [StudentController::class, 'index']);
    Route::get('/students/enrollment-trend', [StudentController::class, 'enrollmentByMonth']);
    Route::get('/students/stats',            [StudentController::class, 'stats']);

    Route::get('/courses',             [CourseController::class, 'index']);
    Route::get('/courses/distribution',[CourseController::class, 'distribution']);

    Route::get('/dashboard/summary',    [DashboardController::class, 'summary']);
    Route::get('/dashboard/attendance', [DashboardController::class, 'attendance']);
});