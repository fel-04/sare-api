<?php

namespace Database\Seeders;

use App\Models\StatusTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusTeacher::create(['name' => 'En Proceso de Contratación']);
        StatusTeacher::create(['name' => 'Contratado']);
        StatusTeacher::create(['name' => 'Incapacidad Maternidad']);
        StatusTeacher::create(['name' => 'Incapacidad Paternidad']);
        StatusTeacher::create(['name' => 'Incapacidad']);
        StatusTeacher::create(['name' => 'Baja Temporal']);
        StatusTeacher::create(['name' => 'Baja']);
    }
}
