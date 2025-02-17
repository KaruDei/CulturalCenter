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
        EventStatus::updateOrCreate(['status' => 'Запланированно']);
        EventStatus::updateOrCreate(['status' => 'Активно']);
        EventStatus::updateOrCreate(['status' => 'Завершенно']);
    }
}
