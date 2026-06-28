<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        $validated = $request->validated();
        $group = Group::create($validated);

        return response()->json([
          'message' => 'Group created successfully',
          'data' => $group
         ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
