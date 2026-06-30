<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create(['name' => 'Director', 'deparment_id'=>1]);
        Position::create(['name' => 'Subdirector', 'deparment_id'=>1]);
        Position::create(['name' => 'Asistente de Dirección', 'deparment_id'=>1]);

        Position::create(['name' => 'Coordinador Académico', 'deparment_id'=>2]);
        Position::create(['name' => 'Profesor', 'deparment_id'=>2]);
        Position::create(['name' => 'Prefecto', 'deparment_id'=>2]);
        Position::create(['name' => 'Tutor Académico', 'deparment_id'=>2]);


        Position::create(['name' => 'Jefe de Control Escolar', 'deparment_id'=>3]);
        Position::create(['name' => 'Auxiliar de Control Escolar', 'deparment_id'=>3]);


        Position::create(['name' => 'Contador', 'deparment_id'=>4]);
        Position::create(['name' => 'Cajero', 'deparment_id'=>4]);
        Position::create(['name' => 'Secretaria Administrativa', 'deparment_id'=>4]);


        Position::create(['name' => 'Jefe de Recursos Humanos', 'deparment_id'=>5]);
        Position::create(['name' => 'Auxiliar de Recursos Humanos', 'deparment_id'=>5]);


        Position::create(['name' => 'Administrador de Sistemas', 'deparment_id'=>6]);
        Position::create(['name' => 'Desarrollador', 'deparment_id'=>6]);
        Position::create(['name' => 'Soporte Técnico', 'deparment_id'=>6]);

        Position::create(['name' => 'Intendente', 'deparment_id'=>7]);
        Position::create(['name' => 'Vigilante', 'deparment_id'=>7]);
        Position::create(['name' => 'Jardinero', 'deparment_id'=>7]);
        Position::create(['name' => 'Personal de Mantenimiento', 'deparment_id'=>7]);


        Position::create(['name' => 'Bibliotecario', 'deparment_id'=>8]);
        Position::create(['name' => 'Auxiliar de Biblioteca', 'deparment_id'=>8]);

        Position::create(['name' => 'Psicólogo', 'deparment_id'=>9]);
        Position::create(['name' => 'Orientador Educativo', 'deparment_id'=>9]);
        Position::create(['name' => 'Trabajador Social', 'deparment_id'=>9]);


        Position::create(['name' => 'Enfermero', 'deparment_id'=>10]);
        Position::create(['name' => 'Médico Escolar', 'deparment_id'=>10]);

        Position::create(['name' => 'Entrenador', 'deparment_id'=>11]);
        Position::create(['name' => 'Coordinador Deportivo', 'deparment_id'=>11]);

        Position::create(['name' => 'Jefa de vinculación', 'deparment_id'=>12]);
        Position::create(['name' => 'Auxiliar de vinculación', 'deparment_id'=>12]);

    }
}
