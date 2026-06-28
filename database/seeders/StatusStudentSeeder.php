<?php

namespace Database\Seeders;

use App\Models\StatusStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusStudent::create(['name' => 'Inscrito']);
        StatusStudent::create(['name' => 'Baja']);
        StatusStudent::create(['name' => 'Baja Temporal']);
    }
}
