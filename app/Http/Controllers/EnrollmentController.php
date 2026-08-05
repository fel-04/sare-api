<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Crear una nueva inscripción (method Store).
     */
    public function store(StoreEnrollmentRequest $request)
    {
         $validated = $request->validated();

         $enrollment = Enrollment::create($validated);

         return response()->json([
          'message' => 'Inscripción creada con éxito',
          'data' => $enrollment
         ], 201);
    }

    /**
     * Ver una inscripción específica (method Show).
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
