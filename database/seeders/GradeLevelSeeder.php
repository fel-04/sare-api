<?php

namespace Database\Seeders;

use App\Models\GradeLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GradeLevel::create(['name' => '1er', 'school_period_id' => 1]);
        GradeLevel::create(['name' => '2do', 'school_period_id' => 1]);
        GradeLevel::create(['name' => '3er', 'school_period_id' => 1]);
        GradeLevel::create(['name' => '4to', 'school_period_id' => 1]);
        GradeLevel::create(['name' => '5to', 'school_period_id' => 1]);
        GradeLevel::create(['name' => '6to', 'school_period_id' => 1]);
    }
}
