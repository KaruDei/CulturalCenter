<?php

namespace Database\Seeders;

use App\Models\ActorRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActorRoles::create(['role' => 'Ведущий']);
        ActorRoles::create(['role' => 'Актер']);
    }
}
