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
                'actor_role_id' => ActorRoles::first()->where('role', 'Ведущий')->value('id'),
                'picture' => '/images/actors/actor1.png',
            ]
        );
        Actors::updateOrCreate(
            [
                'full_name' => "Ра́йан То́мас Го́слинг"
            ], 
            [
                'description' => "Ра́йан То́мас Го́слинг — канадский актёр. Известен по ролям в независимых фильмах и крупных студийных проектах разных жанров. Сборы фильмов с его участием составили свыше 1,9 миллиарда долларов. Обладатель многих наград, включая «Золотого глобуса», и номинант трёх «Оскаров» и одного BAFTA.",
                'actor_role_id' => ActorRoles::first()->where('role', 'Актер')->value('id'),
                'picture' => '/images/actors/actor2.png',
            ]
        );
    }
}
