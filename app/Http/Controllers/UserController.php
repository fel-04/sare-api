<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Ver usuarios (method Index).
     */

    public function index()
    {
        $users =  User::all();
        return response()->json($users);
    }

    /**
     * Mostrar un usuario específico (method Show).
     */
    public function show(User $user)
    {
        return response()->json($user);

    }

    /**
     * importar usuarios (method Import).
     */
    public function import(Request $request)
    {

        Excel::import(new UsersImport, $request->file('file'));

        return response()->json([
            'message' => 'Usuarios importados con éxito',
        ], 200);
    }
}
