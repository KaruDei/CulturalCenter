<?php

namespace Database\Seeders;

use App\Models\TicketStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketStatus::updateOrCreate(['status' => 'Оплачено']);
        TicketStatus::updateOrCreate(['status' => 'Не оплачено']);
    }
}
