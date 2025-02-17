<?php

namespace Database\Seeders;

use App\Models\EventTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventTypes::updateOrCreate(['type' => 'Кино']);
        EventTypes::updateOrCreate(['type' => 'Театр']);
        EventTypes::updateOrCreate(['type' => 'Шоу']);
    }
}
