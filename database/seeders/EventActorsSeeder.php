<?php

namespace Database\Seeders;

use App\Models\Actors;
use App\Models\EventActors;
use App\Models\Events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventActors::updateOrCreate(
            [
                'event_id' => Events::where('title', 'Князь Владимир')->first()->value('id'),
                'actor_id' => Actors::where('full_name', 'Ра́йан То́мас Го́слинг')->first()->value('id'),
            ]
        );

        EventActors::updateOrCreate(
            [
                'event_id' => Events::where('title', 'Илья Муромец и Соловей Разбойник')->first()->value('id'),
                'actor_id' => Actors::where('full_name', 'Иванов Иван Иванович')->first()->value('id'),
            ]
        );
    }
}
