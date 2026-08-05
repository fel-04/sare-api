<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmergencyContactRequest;
use App\Http\Requests\UpdateEmergencyContactRequest;
use App\Models\EmergencyContact;
use Illuminate\Http\Request;

class EmergencyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Crear un nuevo contacto de emergencia (method Store).
     */
    public function store(StoreEmergencyContactRequest $request)
    {
        $validated = $request->validated();
        $emergencyContact = EmergencyContact::create($validated);
        return response()->json([
            'message' => 'Contacto de emergencia creado con éxito',
            'data' => $emergencyContact
        ], 201);
    }

    /**
     * Ver un contacto de emergencia específico (method Show).
     */
    public function show(EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmergencyContactRequest $request, EmergencyContact $emergencyContact)
    {
        $validated = $request->validated();
        $emergencyContact = $emergencyContact->update($validated);
        return response()->json([
            'message' => 'Contacto de emergencia actualizado con éxito',
            'data' => $emergencyContact
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmergencyContact $emergencyContact)
    {
        //
    }
}
