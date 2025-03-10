<?php

namespace Database\Seeders;

use App\Models\EventOrders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventStatus;
use App\Models\EventTypes;
use App\Models\Rooms;
use App\Models\EventCreators;
use App\Models\User;

class EventOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventOrders::updateOrCreate(
            ['title' => 'Заказ 1'], 
            [
                'description' => 'Описание заказа 1', 
                'event_type_id' => EventTypes::first()->where('type', 'Шоу')->value('id'),
                'duration' => 30,
                'price' => 250,
                'picture' => '/images/events/ilya-i-solovei.png',
                'bigpicture' => '/images/events/ilya-i-solovei-big.png',
                'script' => 'Какой то сценарий',
                'user_id' => User::where('id', User::where('email', 'admin@mail.ru')->first()->value('id'))->first()->value('id'),
                'event_status_id' => EventStatus::first()->where('status', 'Заказано')->value('id'),
            
        ]);
    }
}
