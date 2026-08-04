<?php

namespace Database\Seeders;

use App\Models\ChargeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChargeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChargeType::create([
            'name' => 'Inscripción',
            'description' => 'Pago por inscripción al ciclo escolar.',
            'is_recurring' => false,
        ]);
        ChargeType::create([
            'name' => 'Reinscripción',
            'description' => 'Pago por reinscripción al siguiente ciclo escolar.',
            'is_recurring' => false,
        ]);
        ChargeType::create([
            'name' => 'Colegiatura',
            'description' => 'Pago de colegiatura correspondiente al periodo establecido.',
            'is_recurring' => true,
        ]);

        ChargeType::create([
            'name' => 'Libros',
            'description' => 'Venta de libros escolares.',
            'is_recurring' => false,
        ]);

        ChargeType::create([
            'name' => 'Transporte Escolar',
            'description' => 'Servicio de transporte escolar.',
            'is_recurring' => true,
        ]);

        ChargeType::create([
            'name' => 'Estacionamiento',
            'description' => 'Uso del estacionamiento institucional.',
            'is_recurring' => false,
        ]);

        ChargeType::create([
            'name' => 'Titulación',
            'description' => 'Pago del proceso de titulación.',
            'is_recurring' => false,

        ]);

        ChargeType::create([
            'name' => 'Graduación',
            'description' => 'Pago por ceremonia de graduación.',
            'is_recurring' => false,
        ]);

        ChargeType::create([
            'name' => 'Uniforme',
            'description' => 'Venta de uniforme escolar.',
            'is_recurring' => false,
        ]);
        ChargeType::create([
            'name' => 'Recursamiento',
            'description' => 'Pago por recursar una asignatura.',
            'is_recurring' => false,
        ]);
        ChargeType::create([
            'name' => 'Credencial',
            'description' => 'Expedición de credencial escolar.',
            'is_recurring' => false,
        ]);

        ChargeType::create([
            'name' => 'Reposición de Credencial',
            'description' => 'Reposición por pérdida o deterioro de la credencial.',
            'is_recurring' => false,
        ]);




    }
}
