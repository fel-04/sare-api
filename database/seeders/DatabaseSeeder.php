<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
            GenderSeeder::class,
            DepartmentSeeder::class,
            PositionsSeeder::class,
            StatusTeacherSeeder::class,
            StatusStudentSeeder::class,
            EmployeeTypeSeeder::class,
            SchoolPeriodSeeder::class,
            GradeLevelSeeder::class,
            GroupSeeder::class,
            ContractTypesSeeder::class
        ]);
    }
}
