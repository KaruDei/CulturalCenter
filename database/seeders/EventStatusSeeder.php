<?php

namespace Database\Seeders;

use App\Models\EventStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventStatus::updateOrCreate(['status' => 'Запланировано']);
        EventStatus::updateOrCreate(['status' => 'Активно']);
        EventStatus::updateOrCreate(['status' => 'Завершенно']);
        EventStatus::updateOrCreate(['status' => 'Заказано']);
        EventStatus::updateOrCreate(['status' => 'Отменено']);
    }
}
