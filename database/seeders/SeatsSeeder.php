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
                'row' => 1,
                'number' => 4,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 1,
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
                'row' => 2,
                'number' => 7,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 8,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 9,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 10,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 11,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 2,
                'number' => 12,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 13,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 14,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 15,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 16,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 17,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 18,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 19,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 20,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 3,
                'number' => 21,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 22,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 23,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 24,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 25,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 26,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 27,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 28,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 29,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 4,
                'number' => 30,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 31,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 32,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 33,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 34,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 35,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 36,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 37,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 38,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 5,
                'number' => 39,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 40,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 41,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 42,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 43,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 44,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 45,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 6,
                'number' => 46,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 7,
                'number' => 47,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 7,
                'number' => 48,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 7,
                'number' => 49,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 7,
                'number' => 50,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 7,
                'number' => 51,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 8,
                'number' => 52,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 8,
                'number' => 53,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 101)->value('id'),
                'row' => 8,
                'number' => 54,
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
                'row' => 1,
                'number' => 4,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 1,
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
                'row' => 2,
                'number' => 7,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 2,
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

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 10,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 11,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 12,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 3,
                'number' => 13,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 4,
                'number' => 14,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 4,
                'number' => 15,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 4,
                'number' => 16,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 5,
                'number' => 17,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 5,
                'number' => 18,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 5,
                'number' => 19,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 5,
                'number' => 20,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 102)->value('id'),
                'row' => 5,
                'number' => 21,
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
                'row' => 2,
                'number' => 7,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 2,
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

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 10,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 11,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 12,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 13,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 14,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 3,
                'number' => 15,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 4,
                'number' => 16,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 4,
                'number' => 17,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 4,
                'number' => 18,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 4,
                'number' => 19,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 4,
                'number' => 20,
            ]
        );



        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 5,
                'number' => 21,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 5,
                'number' => 22,
            ]
        );

        Seats::updateOrCreate(
            [
                'room_id' => Rooms::first()->where('number', 103)->value('id'),
                'row' => 5,
                'number' => 23,
            ]
        );
    }
}
