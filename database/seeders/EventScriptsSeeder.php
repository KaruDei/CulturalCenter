<?php

namespace Database\Seeders;

use App\Models\EventScripts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventScriptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventScripts::updateOrCreate(
            [
                'title' => 'Сценарий для фильма Князь Владимир'
            ],
            [
                'content' => 'Зрители содятся по местам. Выключается свет. Включается фильм. Фильм заканчивается. Включается свет. Зрители выходят из зала.'
            ]
        );

        EventScripts::updateOrCreate(
            [
                'title' => 'Какой то сценарий к какому то мероприятию'
            ],
            [
                'content' => 'Что то происходит ¯\_(ツ)_/¯'
            ]
        );
    }
}
