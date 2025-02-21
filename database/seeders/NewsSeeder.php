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
                'title' => 'Скоро Три богатыря на дальних берегах!'
            ],
            [
                'content' => 'На этот раз Алеша Попович, Добрыня Никитич и Илья Муромец, благодаря козням коварной Бабы Яги, оказываются за семью морями на острове, на котором живут туземцы и страшный Гомума. В их отсутствие купец Колыван решают вместе с Бабой-Ягой захватить царство и забрать власть у князя Киевского. На помощь незадачливому правителю приходит конь Юлий, а также жены богатырей и их многочисленные родственники. Словом, богатырей и зрителей ждут приключения на дальних берегах, обыкновенные и невероятные.',
                'picture' => '/images/news/3-bogatira.png',
                ]
        );

        News::updateOrCreate(
            ['title' => 'Выставка Винсента Ван Гога!'],
            [
                'content' => 'Большая мультимедийная выставка посвящённая художеству Винсента Ван Гога!',
                'picture' => '/images/news/vangog.png',
                ]
        );
    }
}
