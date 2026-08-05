<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Crear un nuevo curso (method Store).
     */
    public function store(StoreCourseRequest $request)
    {
        $validate = $request->validated();
        $course = Course::create($validate);

        return response()->json([
            'message' => 'Curso creado con éxito',
            'data' => $course
        ], 201);
    }

    /**
     * Ver un curso específico (method Show).
     */
    public function show(Course $course)
    {
        return response()->json($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
