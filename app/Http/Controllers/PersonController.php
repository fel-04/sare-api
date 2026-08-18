<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();

        return response()->json($persons);
    }



    /**
     * Crear una nueva persona (method Store).
     */
    public function store(StorePersonRequest $request)
    {
       $validated = $request->validated();

       $person = Person::create($validated);

         return response()->json([
          'message' => 'Person created successfully',
          'data' => $person
         ], 201);
    }

    /**
     * Ver una persona específica (method Show).
     */
    public function show(Person $person)
    {
        return response()->json($person);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        $validated = $request->validated();

        $person->update($validated);

        return response()->json([
            'message' => 'Person updated successfully',
            'data' => $person
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return response()->json([
            'message' => 'Person deleted successfully'
        ]);
    }
}
