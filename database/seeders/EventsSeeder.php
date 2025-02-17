<?php

namespace Database\Seeders;

use App\Models\EventCreators;
use App\Models\Events;
use App\Models\EventStatus;
use App\Models\EventTypes;
use App\Models\Rooms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Events::updateOrCreate(
            ['title' => 'Князь Владимир'], 
            [
                'description' => 'События мультфильма начинают развиваться еще давным – давно, в Древней Руси. На тот момент Русью правили три дружных брата, разделившие между собой земли по уму и совести: Олегу достались Древлянские земли, Ярополку – Киев, а князь Владимир сел на трон в Новгороде. И все тогда на Руси были тихо, мирно и спокойно. Правление свое братья выстраивали мудро, на доверии и совести. Так бы и продолжалось долгие годы, но, конечно же, нашли люди, захотевшие посеять Смуту и сместить с престола братьев. И способ для этого был выбран очень хитрый. Один из сыновей волхва – молодой человек по имени Кривжа решает прийти к власти через ссоры братьев. Теперь он начинает строить разнообразные козни, что бы как можно скорее посеять между Святославичами раздор. Спокойная жизнь Руси быстро заканчивается, поэтому на смену пирам и праздникам приходят войны, ссоры и раздор. Эта история расскажет нам не только о том, как пришел к власти князь Владимир, но и о важных в жизни вещах и качествах, о которых нельзя забывать ни при каких обстоятельствах.', 
                'id_event_type' => EventTypes::first()->where('type', 'Кино')->value('id'),
                'id_room' => Rooms::first()->where('number', 101)->value('id'),
                'date' => '2025-02-17',
                'time' => '12:01:54',
                'duration' => 78,
                'price' => 120,
                'id_creator' => EventCreators::first()->where('creator', 'Культурный центр')->value('id'),
                'id_event_status' => EventStatus::first()->where('status', 'Запланированно')->value('id')
            ]
        );

        Events::updateOrCreate(
            ['title' => 'Шоу'], 
            [
                'description' => 'Какое-то шоу.', 
                'id_event_type' => EventTypes::first()->where('type', 'Шоу')->value('id'),
                'id_room' => Rooms::first()->where('number', 102)->value('id'),
                'date' => '2025-02-18',
                'time' => '12:00:14',
                'duration' => 30,
                'price' => 250,
                'id_creator' => EventCreators::first()->where('creator', 'Some company')->value('id'),
                'id_event_status' => EventStatus::first()->where('status', 'Запланированно')->value('id')
            ]
        );
    }
}
