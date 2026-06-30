<?php

namespace Database\Seeders;

use App\Models\ContractType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContractType::create(['name' => 'Tiempo Completo', 'description' => 'Jornada completa']);
        ContractType::create(['name' => 'Medio tiempo', 'description' => 'Jornada parcial']);
        ContractType::create(['name' => 'Por Horas', 'description' => 'Pago por hora impartida']);
        ContractType::create(['name' => 'Temporal', 'description' => 'Contrato temporal']);
        ContractType::create(['name' => 'Honorarios', 'description' => 'Prestación de servicios']);

    }
}
