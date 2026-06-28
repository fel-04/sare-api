<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Speciality::create(['name'=> 'Español']);
        Speciality::create(['name'=> 'Matemáticas']);
        Speciality::create(['name'=> 'Ciencias Naturales']);
        Speciality::create(['name'=> 'Geografía']);
        Speciality::create(['name'=> 'Historía']);
        Speciality::create(['name'=> 'Formación Civica y Ética']);
    }
}
