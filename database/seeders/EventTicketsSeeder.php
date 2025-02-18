<?php

namespace Database\Seeders;

use App\Models\Events;
use App\Models\EventTickets;
use App\Models\Rooms;
use App\Models\Seats;
use App\Models\TicketStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventTickets::updateOrCreate(
            [
                'price' => Events::first()->where('title', 'Шоу')->value('price'),
                'id_user' => User::first()->where('email', 'user@mail.ru')->value('id'), 
                'id_event' => Events::first()->where('title', 'Шоу')->value('id'), 
                'id_room' => Rooms::first()->where('number', 101)->value('id'), 
                'id_seat' => Seats::first()->where('id_room', Rooms::first()->where('number', 101)->value('id'))->where('number', 2)->value('id'),
                'id_ticket_status' => TicketStatus::first()->where('status', 'Не оплачено')->value('id'), 
            ]
        );

        EventTickets::updateOrCreate(
            [
                'price' => Events::first()->where('title', 'Князь Владимир')->value('price'),
                'id_user' => User::first()->where('email', 'Admin@mail.ru')->value('id'), 
                'id_event' => Events::first()->where('title', 'Князь Владимир')->value('id'), 
                'id_room' => Rooms::first()->where('number', 103)->value('id'), 
                'id_seat' => Seats::first()->where('id_room', Rooms::first()->where('number', 103)->value('id'))->where('number', 6)->value('id'),
                'id_ticket_status' => TicketStatus::first()->where('status', 'Оплачено')->value('id'), 
            ]
        );
    }
}
