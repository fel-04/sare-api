<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name' => 'Dirección', 'description'=>'Administración general de la institución']);
        Department::create(['name' => 'Académico', 'description'=>'Gestión de docentes y actividades académicas']);
        Department::create(['name' => 'Control Escolar', 'description'=>'	Inscripciones, expedientes y certificados']);
        Department::create(['name' => 'Administración', 'description'=>'Finanzas, compras y recursos materiales']);
        Department::create(['name' => 'Recursos Humanos', 'description'=>'	Contratación y gestión de personal']);
        Department::create(['name' => 'Tecnologías de la Información', 'description'=>'Infraestructura tecnológica y soporte']);
        Department::create(['name' => 'Servicios Generales', 'description'=>'Limpieza, mantenimiento y vigilancia']);
        Department::create(['name' => 'Biblioteca', 'description'=>'Administración de la biblioteca']);
        Department::create(['name' => 'Psicopedagogía', 'description'=>'Atención psicológica y orientación educativa']);
        Department::create(['name' => 'Enfermería', 'description'=>'Atención médica y primeros auxilios']);
        Department::create(['name' => 'Deportes', 'description'=>'Actividades deportivas']);
        Department::create(['name' => 'Vinculación', 'description'=>'Convenios y relaciones institucionales']);

    }
}
