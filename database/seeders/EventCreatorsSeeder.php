<?php

namespace Database\Seeders;

use App\Models\EventCreators;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventCreatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventCreators::updateOrCreate(['creator' => "Культурный центр"]);
        EventCreators::updateOrCreate(['creator' => "Some company"]);
    }
}
