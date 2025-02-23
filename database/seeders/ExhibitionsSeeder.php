<?php

namespace Database\Seeders;

use App\Models\Events;
use App\Models\Exhibitions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExhibitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exhibitions::updateOrCreate(
            [
                'title' => 'Выставка 1'
            ],
            [
                'description' => 'Выставка картин о великом Князе Владимире.',
                'start_date' => '2025-02-18',
                'end_date' => '2025-02-18',
                'picture' => '/images/exhibitions/X5hxZOIFORs.jpg',
                'event_id' => Events::first()->where('title', 'Князь Владимир')->value('id')
            ]
        );

        Exhibitions::updateOrCreate(
            [
                'title' => 'Выставка 2'
            ],
            [
                'description' => 'Выставка самых известных скульптур мира.',
                'start_date' => '2025-02-19',
                'end_date' => '2025-02-19',
                'picture' => '/images/exhibitions/exhibits104.jpg',
            ]
        );

        Exhibitions::updateOrCreate(
            [
                'title' => 'Выставка 3'
            ],
            [
                'description' => 'Выставка самых известных скульптур мира.',
                'start_date' => '2025-02-19',
                'end_date' => '2025-02-19',
                'picture' => '/images/exhibitions/zoteev-20.jpg',
            ]
        );
    }
}
