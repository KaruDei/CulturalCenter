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
                'id_event' => Events::where('title', 'Князь Владимир')->first()->value('id'),
                'id_actor' => Actors::where('full_name', 'Гончаров Гончар Гончарович')->first()->value('id'),
            ]
        );

        EventActors::updateOrCreate(
            [
                'id_event' => Events::where('title', 'Шоу')->first()->value('id'),
                'id_actor' => Actors::where('full_name', 'Иванов Иван Иванович')->first()->value('id'),
            ]
        );
    }
}
