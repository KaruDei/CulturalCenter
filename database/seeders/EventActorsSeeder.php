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
                'id_event' => Events::first()->where('title', 'Князь Владимир')->value('id'),
                'id_actor' => Actors::first()->where('full_name', 'Гончаров Гончар Гончарович')->value('id'),
            ]
        );

        EventActors::updateOrCreate(
            [
                'id_event' => Events::first()->where('title', 'Шоу')->value('id'),
                'id_actor' => Actors::first()->where('full_name', 'Иванов Иван Ивановчи')->value('id'),
            ]
        );
    }
}
