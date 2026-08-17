<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['numero_control'],
            'email' => $row['email'],
            'password' => bcrypt($row['numero_control']),
        ]);


        /***
         *
         *  return DB::transaction(function () use ($row) {

            $user = User::create([
                'name' => $row['numero_control'],
                'email' => $row['email'],
                'password' => bcrypt($row['numero_control']),
            ]);

            Student::create([
                'user_id' => $user->id,
                'numero_control' => $row['numero_control'],
            ]);

            return $user;
        });
         */
    }

    Public function rules(): array
    {
        return [
            'numero_control' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
        ];
    }
}
