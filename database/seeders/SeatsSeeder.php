<?php

namespace Database\Seeders;

use App\Models\Rooms;
use App\Models\Seats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Room 101
        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 1,
                'number' => 1,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 1,
                'number' => 2,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 1,
                'number' => 3,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 4,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 5,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 6,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 7,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 8,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 9,
            ]
        );

        // Room 102

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 1,
                'number' => 1,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 1,
                'number' => 2,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 1,
                'number' => 3,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 2,
                'number' => 4,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 2,
                'number' => 5,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 2,
                'number' => 6,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 7,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 8,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 9,
            ]
        );

        // Room 103

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 1,
                'number' => 1,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 1,
                'number' => 2,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 1,
                'number' => 3,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 2,
                'number' => 4,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 2,
                'number' => 5,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 2,
                'number' => 6,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 7,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 8,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 9,
            ]
        );
    }
}
