<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherSpecialityRequest;
use App\Http\Requests\UpdateTeacherSpecialityRequest;
use App\Models\TeacherSpeciality;
use Illuminate\Http\Request;

class TeacherSpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Crear una nueva especialidad para un maestro (method Store).
     */
    public function store(StoreTeacherSpecialityRequest $request)
    {
        //
    }

    /**
     * Ver una especialidad específica (method Show).
     */
    public function show(TeacherSpeciality $teacherSpeciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherSpecialityRequest $request, TeacherSpeciality $teacherSpeciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherSpeciality $teacherSpeciality)
    {
        //
    }
}
