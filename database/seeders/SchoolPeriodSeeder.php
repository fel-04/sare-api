<?php

namespace Database\Seeders;

use App\Models\SchoolPeriod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolPeriod::create([
            'name' => '2025-2026',
            'start_date' => '2025-08-01',
            'end_date' => '2026-06-30',
        ]);
    }
}
