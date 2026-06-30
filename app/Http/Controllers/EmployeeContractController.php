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
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeContractRequest $request)
    {
        $validate = $request->validated();

        $employee_contract = EmployeeContract::create($validate);

        return response()->json([
            'message' => 'Colaborador registrado satisfactoriamente',
            'data' => $employee_contract
        ], 200);
    }

    /**
     * Display the specified resource.
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
