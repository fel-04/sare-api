<?php

namespace Database\Seeders;

use App\Models\ChargeStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChargeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChargeStatus::create([
            'name' => 'Pendiente',
            'color' => '#c00c0c',
        ]);
        ChargeStatus::create([
            'name' => 'Pagado',
            'color' => '#00c00c',
        ]);
        ChargeStatus::create([
            'name' => 'Cancelado',
            'color' => '#c0c00c',
        ]);
    }
}
