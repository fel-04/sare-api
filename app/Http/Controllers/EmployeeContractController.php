<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeContractRequest;
use App\Http\Requests\UpdateEmployeeContractRequest;
use App\Models\EmployeeContract;

class EmployeeContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee_contracts = EmployeeContract::all();
        return response()->json($employee_contracts);
    }

    /**
     * Crear un nuevo contrato de empleado (method Store).
     */
    public function store(StoreEmployeeContractRequest $request)
    {
        $validate = $request->validated();

        $employee_contract = EmployeeContract::create($validate);

        return response()->json([
            'message' => 'Contrato de empleado creado con éxito',
            'data' => $employee_contract
        ], 200);
    }

    /**
     * Ver un contrato de empleado específico (method Show).
     */
    public function show(EmployeeContract $employees_contract)
    {
        return response()->json($employees_contract);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeContractRequest $request, EmployeeContract $employees_contract)
    {
        $validated = $request->validated();
        $employees_contract->update($validated);

        return response()->json([
            'message' => 'Contrato de empleado actualizado con éxito',
            'data' => $employees_contract
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeContract $employees_contract)
    {
        $employees_contract->delete();
        return response()->json([
            'message' => 'Contrato de empleado eliminado con éxito'
        ]);
    }
}
