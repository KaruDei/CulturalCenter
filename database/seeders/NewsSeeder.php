<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::updateOrCreate(
            [
                'title' => 'Новость 1'
            ],
            [
                'content' => 'Супер пупер новость №1!',
                'picture' => '/images/1739989222-BobStoneBeginer.png'
                ]
        );

        News::updateOrCreate(
            ['title' => 'Новость 2'],
            ['content' => 'Супер пупер новость №2!']
        );
    }
}
