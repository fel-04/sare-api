<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    /**
     * Crear una nueva materia (method Store).
     */
    public function store(StoreSubjectRequest $request)
    {
        $validated = $request->validated();
        $subject = Subject::create($validated);

        return response()->json([
            'message' => 'Matería creada con éxito',
            'data' => $subject
        ], 201);
    }

    /**
     * Ver una materia específica (method Show).
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
