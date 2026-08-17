<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function import(Request $request)
    {

        Excel::import(new UsersImport, $request->file('file'));

        return response()->json([
            'message' => 'Usuarios importados con éxito',
        ], 200);
    }
}
