<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create(['name' => 'A', 'grade_level_id'=> 1]);
        Group::create(['name' => 'B', 'grade_level_id'=> 1]);
        Group::create(['name' => 'C', 'grade_level_id'=> 1]);
        Group::create(['name' => 'D', 'grade_level_id'=> 1]);
    }
}
