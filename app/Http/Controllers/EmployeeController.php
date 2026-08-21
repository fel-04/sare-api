<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    /**
     * Crear un nuevo colaborador (method Store).
     */
    public function store(StoreEmployeeRequest $request)
    {
        $validated = $request->validated();
        $employee = Employee::create($validated);

        return response()->json([
            'message' => 'Colaborador creado con éxito',
            'data' => $employee
        ], 200);
    }

    /**
     * Ver un colaborador específico (method Show).
     */
    public function show(Employee $employee)
    {
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $validated = $request->validated();
        $employee->update($validated);

        return response()->json([
          'message' => 'Colaborador actualizado con éxito',
          'data' => $employee
         ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json([
            'message' => 'Colaborador eliminado con éxito'
        ]);
    }
}
