<?php

namespace Database\Seeders;

use App\Models\Events;
use App\Models\EventTickets;
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
                'id_ticket_status' => TicketStatus::first()->where('status', 'Не оплачено')->value('id'), 
            ]
        );

        EventTickets::updateOrCreate(
            [
                'price' => Events::first()->where('title', 'Князь Владимир')->value('price'),
                'id_user' => User::first()->where('email', 'Admin@mail.ru')->value('id'), 
                'id_event' => Events::first()->where('title', 'Князь Владимир')->value('id'), 
                'id_ticket_status' => TicketStatus::first()->where('status', 'Оплачено')->value('id'), 
            ]
        );
    }
}
