<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Listado de maestros (method Index).
     */
    public function index()
    {
      $teachers = Teacher::all();
      return response()->json([
        'message' => 'Teachers retrieved successfully',
        'data' => $teachers
      ], 200);

    }

    /**
     * Crear un nuevo maestro (method Store).
     */
    public function store(StoreTeacherRequest $request)
    {
        $validate = $request->validated();
        $teacher = Teacher::create($validate);

        return response()->json([
            'message' => 'Mastro creado con éxito',
            'data' => $teacher
        ], 201);
    }

    /**
     * Ver un maestro específico (method Show).
     */
    public function show(Teacher $teacher)
    {
        return response()->json($teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
