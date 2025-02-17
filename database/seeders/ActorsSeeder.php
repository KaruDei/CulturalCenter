<?php

namespace Database\Seeders;

use App\Models\ActorRoles;
use App\Models\Actors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actors::create(['full_name' => "Иванов Иван Ивановчи", 'id_actor_role' => ActorRoles::first()->where('role', 'Ведущий')->value('id')]);
        Actors::create(['full_name' => "Гончаров Гончар Гончарович", 'id_actor_role' => ActorRoles::first()->where('role', 'Актер')->value('id')]);
    }
}
