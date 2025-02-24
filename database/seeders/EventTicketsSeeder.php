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
                'price' => Events::first()->where('title', 'Илья Муромец и Соловей Разбойник')->value('price'),
                'user_id' => User::first()->where('email', 'user@mail.ru')->value('id'), 
                'event_id' => Events::first()->where('title', 'Илья Муромец и Соловей Разбойник')->value('id'), 
                'room_id' => Rooms::first()->where('number', 103)->value('id'), 
                'seat_id' => Seats::first()->where('room_id', Rooms::first()->where('number', 103)->value('id'))->where('number', 2)->value('id'),
                'ticket_status_id' => TicketStatus::first()->where('status', 'Не оплачено')->value('id'), 
            ]
        );

        EventTickets::updateOrCreate(
            [
                'price' => Events::first()->where('title', 'Князь Владимир')->value('price'),
                'user_id' => User::first()->where('email', 'Admin@mail.ru')->value('id'), 
                'event_id' => Events::first()->where('title', 'Князь Владимир')->value('id'), 
                'room_id' => Rooms::first()->where('number', 101)->value('id'), 
                'seat_id' => Seats::first()->where('room_id', Rooms::first()->where('number', 101)->value('id'))->where('number', 6)->value('id'),
                'ticket_status_id' => TicketStatus::first()->where('status', 'Оплачено')->value('id'), 
            ]
        );
    }
}
