<?php

namespace Database\Seeders;

use App\Models\ContactRelationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactRelashionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactRelationship::create(['name' => 'Padre']);
        ContactRelationship::create(['name' => 'Madre']);
        ContactRelationship::create(['name' => 'Hermano(a)']);
        ContactRelationship::create(['name' => 'Tío(a)']);
        ContactRelationship::create(['name' => 'Abuelo(a)']);
        ContactRelationship::create(['name' => 'Primo(a)']);
        ContactRelationship::create(['name' => 'Sobrino(a)']);
        ContactRelationship::create(['name' => 'Vecino(a)']);
        ContactRelationship::create(['name' => 'Tutor(a)']);

    }
}
