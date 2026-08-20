<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Listado de grupos (method Index).
     */
    public function index()
    {
        $group = Group::all();
        return response()->json([
        'message' => 'Grupos obtenidos satisfactoriamente',
        'data' => $group
      ], 200);
    }


    /**
     * Crear un nuevo grupo (method Store).
     */
    public function store(StoreGroupRequest $request)
    {
        $validated = $request->validated();
        $group = Group::create($validated);

        return response()->json([
          'message' => 'Grupo creado con éxito',
          'data' => $group
         ], 201);
    }

    /**
     * Ver un grupo específico (method Show).
     */
    public function show(Group $group)
    {
         return response()->json($group);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $validated = $request->validated();
        $group->update($validated);

        return response()->json([
          'message' => 'Grupo actualizado con éxito',
          'data' => $group
         ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return response()->json([
          'message' => 'Grupo eliminado con éxito'
         ], 200);
    }
}
