<?php

namespace Database\Seeders;

use App\Models\EventCreators;
use App\Models\Events;
use App\Models\EventScripts;
use App\Models\EventStatus;
use App\Models\EventTypes;
use App\Models\Rooms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Events::updateOrCreate(
            ['title' => 'Князь Владимир'], 
            [
                'description' => 'События мультфильма начинают развиваться еще давным – давно, в Древней Руси. На тот момент Русью правили три дружных брата, разделившие между собой земли по уму и совести: Олегу достались Древлянские земли, Ярополку – Киев, а князь Владимир сел на трон в Новгороде. И все тогда на Руси были тихо, мирно и спокойно. Правление свое братья выстраивали мудро, на доверии и совести. Так бы и продолжалось долгие годы, но, конечно же, нашли люди, захотевшие посеять Смуту и сместить с престола братьев. И способ для этого был выбран очень хитрый. Один из сыновей волхва – молодой человек по имени Кривжа решает прийти к власти через ссоры братьев. Теперь он начинает строить разнообразные козни, что бы как можно скорее посеять между Святославичами раздор. Спокойная жизнь Руси быстро заканчивается, поэтому на смену пирам и праздникам приходят войны, ссоры и раздор. Эта история расскажет нам не только о том, как пришел к власти князь Владимир, но и о важных в жизни вещах и качествах, о которых нельзя забывать ни при каких обстоятельствах.', 
                'id_event_type' => EventTypes::first()->where('type', 'Кино')->value('id'),
                'id_room' => Rooms::first()->where('number', 101)->value('id'),
                'date' => '2025-02-27',
                'time' => '08:00',
                'duration' => 78,
                'price' => 120,
                'picture' => '/images/events/knazVladimir.png',
                'bigpicture' => '/images/events/knazVladimir-big.png',
                'id_event_script' => EventScripts::first()->where('title', 'Сценарий для фильма Князь Владимир')->value('id'),
                'id_creator' => EventCreators::first()->where('creator', 'Культурный центр')->value('id'),
                'id_event_status' => EventStatus::first()->where('status', 'Запланированно')->value('id')
            ]
        );

        Events::updateOrCreate(
            ['title' => 'Алеша Попович и Тугарин Змей'], 
            [
                'description' => 'Когда подступила к Ростову вражеская орда во главе с Тугариным Змеем, Алеша Попович не сумел уберечь жителей от выплаты дани. Теперь богатырь должен восстановить доброе имя, вернуть золото и прогнать неприятеля с земли русской. Он отправляется в путешествие, а помогут ему в этом дядька Тихон, девушка Любава, ее бабушка и говорящий конь Юлий.', 
                'id_event_type' => EventTypes::first()->where('type', 'Шоу')->value('id'),
                'id_room' => Rooms::first()->where('number', 102)->value('id'),
                'date' => '2025-02-28',
                'time' => '08:00',
                'duration' => 30,
                'price' => 250,
                'picture' => '/images/events/alesha-popovich-i-tugarin-zmei.png',
                'bigpicture' => '/images/events/alesha-popovich-i-tugarin-zmei-big.png',
                'id_event_script' => EventScripts::first()->where('title', 'Какой то сценарий к какому то мероприятию')->value('id'),
                'id_creator' => EventCreators::first()->where('creator', 'Some company')->value('id'),
                'id_event_status' => EventStatus::first()->where('status', 'Запланированно')->value('id')
            ]
        );

        Events::updateOrCreate(
            ['title' => 'Добрыня Никитич и Змей Горыныч'], 
            [
                'description' => 'Пока храбрый воин Добрыня Никитич собирал с тугар дань, в Киеве похитили любимую племянницу князя — Забаву Путятичну. Вопреки воле князя, Добрыня с женихом Забавы Елисеем отправляется на ее поиски.', 
                'id_event_type' => EventTypes::first()->where('type', 'Шоу')->value('id'),
                'id_room' => Rooms::first()->where('number', 102)->value('id'),
                'date' => '2025-02-28',
                'time' => '10:00',
                'duration' => 30,
                'price' => 250,
                'picture' => '/images/events/dobrina-i-zmei.png',
                'bigpicture' => '/images/events/dobrina-i-zmei-big.png',
                'id_event_script' => EventScripts::first()->where('title', 'Какой то сценарий к какому то мероприятию')->value('id'),
                'id_creator' => EventCreators::first()->where('creator', 'Some company')->value('id'),
                'id_event_status' => EventStatus::first()->where('status', 'Запланированно')->value('id')
            ]
        );

        Events::updateOrCreate(
            ['title' => 'Илья Муромец и Соловей Разбойник'], 
            [
                'description' => 'Славится земля русская богатырями богатырскими да разбойниками разбойничьими... А сверху всего князь княжеский сидит, за всем следит и порядок наводит, если нужно. Да только не всегда выходит у князя так, как нужно - правильно. Вот и сейчас — с богатырём поругался да от Соловья Разбойника урон потерпел немалый: увёл бандит окаянный казну государственную прямо из-под носа!<br><br>Что делать князю? А ничего особенного — на то он и князь, чтоб из любой ситуации выход найти! Вот и отправились князь с Ильёй на поиски похищенного, а за ними вслед увязалась корреспондентка летописи «Новая береста». А дорога непростая выдалась, до самого Царьграда довела, где встретил их Император Византийский, да только незадача вышла — повздорили наши герои с императором этим, и заключил он против Князя Киевского и Земель русских союз с Соловьем Разбойником...', 
                'id_event_type' => EventTypes::first()->where('type', 'Шоу')->value('id'),
                'id_room' => Rooms::first()->where('number', 102)->value('id'),
                'date' => '2025-02-28',
                'time' => '12:00',
                'duration' => 30,
                'price' => 250,
                'picture' => '/images/events/ilya-i-solovei.png',
                'bigpicture' => '/images/events/ilya-i-solovei-big.png',
                'id_event_script' => EventScripts::first()->where('title', 'Какой то сценарий к какому то мероприятию')->value('id'),
                'id_creator' => EventCreators::first()->where('creator', 'Some company')->value('id'),
                'id_event_status' => EventStatus::first()->where('status', 'Запланированно')->value('id')
            ]
        );
    }
}
