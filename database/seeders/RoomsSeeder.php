<?php

namespace Database\Seeders;

use App\Models\Rooms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rooms::updateOrCreate(['number' => 101]);
        Rooms::updateOrCreate(['number' => 102]);
        Rooms::updateOrCreate(['number' => 103]);
    }
}
