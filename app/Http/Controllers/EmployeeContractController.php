<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeContractRequest;
use App\Models\EmployeeContract;
use Illuminate\Http\Request;

class EmployeeContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(EmployeeContract $employee_contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeContract $employee_contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeContract $employee_contract)
    {
        //
    }
}
