<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    /**
     * Crear una nueva aula (method Store).
     */
    public function store(StoreClassroomRequest $request)
    {
        $validated = $request->validated();
        $classroom = Classroom::create($validated);

        return response()->json([
            'message' => 'Classroom created successfully',
            'data' => $classroom
        ], 201);
    }

    /**
     * Ver una aula específica (method Show).
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
