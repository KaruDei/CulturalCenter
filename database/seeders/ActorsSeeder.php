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
        Actors::updateOrCreate(
            [
                'full_name' => "Иванов Иван Иванович"
            ], 
            [
                'description' => "Иванов Иван Иванович самый уважаемы актёр планеты. Он сыграл множество знаменитых ролей.",
                'id_actor_role' => ActorRoles::first()->where('role', 'Ведущий')->value('id'),
            ]
        );
        Actors::updateOrCreate(
            [
                'full_name' => "Гончаров Гончар Гончарович"
            ], 
            [
                'description' => "Гончаров Гончар Гончарович актёр который очень хорошо чувствует своих героев.",
                'id_actor_role' => ActorRoles::first()->where('role', 'Актер')->value('id'),
                'picture' => '/images/1739989222-BobStoneBeginer.png',
            ]
        );
    }
}
