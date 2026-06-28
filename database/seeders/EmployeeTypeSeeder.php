<?php

namespace Database\Seeders;

use App\Models\EmployeeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeType::create(['name' => 'Director']);
        EmployeeType::create(['name' => 'Subdirector']);
        EmployeeType::create(['name' => 'Docente']);
        EmployeeType::create(['name' => 'Prefecto']);
        EmployeeType::create(['name' => 'Guardia']);
        EmployeeType::create(['name' => 'Intendente']);
        EmployeeType::create(['name' => 'Cafetería']);
    }
}
