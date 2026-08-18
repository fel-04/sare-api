<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmergencyContactController;
use App\Http\Controllers\EmployeeContractController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('persons', PersonController::class)->only(['store', 'show']);
    Route::resource('teachers', TeacherController::class)->only(['index','store', 'show']);
    Route::resource('students', StudentController::class)->only(['store', 'show']);
    Route::resource('enrollments', EnrollmentController::class)->only(['store', 'show']);
    Route::resource('groups', GroupController::class)->only(['store', 'show']);
    Route::resource('employees', EmployeeController::class)->only(['store', 'show']);
    Route::resource('employees-contracts', EmployeeContractController::class)->only(['store', 'show']);
    Route::resource('classrooms', ClassroomController ::class)->only(['store', 'show']);
    Route::resource('courses', CourseController::class)->only(['store', 'show']);
    Route::resource('subjects', SubjectController::class)->only(['store', 'show']);
    Route::resource('emergency-contacts', EmergencyContactController::class)->only(['store', 'show']);
    Route::resource('scholarships', ScholarshipController::class)->only(['store', 'show']);

    Route::post('/user/import', [UserController::class, 'import']);
    Route::resource('users', UserController::class)->only(['index','show']);

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);