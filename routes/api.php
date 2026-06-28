<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('persons', PersonController::class)->only(['store', 'show']);
Route::resource('teachers', TeacherController::class)->only(['index','store', 'show']);
Route::resource('students', StudentController::class)->only(['store', 'show']);
Route::resource('enrollments', EnrollmentController::class)->only(['store', 'show']);
Route::resource('groups', GroupController::class)->only(['store', 'show']);