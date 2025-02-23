<?php

namespace Database\Seeders;

use App\Models\EventCreators;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventCreatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventCreators::updateOrCreate(['user_id' => User::where('email', 'admin@mail.ru')->first()->value('id')]);
        EventCreators::updateOrCreate(['user_id' => User::where('email', 'user@mail.ru')->first()->value('id')]);
    }
}
