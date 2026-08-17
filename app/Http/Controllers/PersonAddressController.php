<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonAddressRequest;
use App\Http\Requests\UpdatePersonAddressRequest;
use App\Models\PersonAddress;
use Illuminate\Http\Request;

class PersonAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Crear una nueva dirección de persona (method Store).
     */
    public function store(StorePersonAddressRequest $request)
    {
        //
    }

    /**
     * Ver una dirección de persona específica (method Show).
     */
    public function show(PersonAddress $personAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonAddressRequest $request, PersonAddress $personAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonAddress $personAddress)
    {
        //
    }
}
