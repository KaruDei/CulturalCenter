<x-admin-layout>
    <div class="flex flex-col items-center justify-start min-h-screen bg-linen mt-14 mb-12 pt-20">
        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все мероприятия</h1>
        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="h-20 w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Название</th>
                        <th class="py-2 px-4 border-b text-left">Описание</th>
                        <th class="py-2 px-4 border-b text-left">Тип мероприятия</th>
                        <th class="py-2 px-4 border-b text-left">Комната</th>
                        <th class="py-2 px-4 border-b text-left">Дата</th>
                        <th class="py-2 px-4 border-b text-left">Время</th>
                        <th class="py-2 px-4 border-b text-left">Длительность</th>
                        <th class="py-2 px-4 border-b text-left">Цена</th>
                        <th class="py-2 px-4 border-b text-left">Сценарий</th>
                        <th class="py-2 px-4 border-b text-left">Создатель</th>
                        <th class="py-2 px-4 border-b text-left">Статус</th>
                        <th class="py-2 px-4 border-b text-left">Создано</th>
                        <th class="py-2 px-4 border-b text-left">Обновлено</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i = 0; 
                    @endphp
                    @foreach ($events as $event)
                    @php
                        $i++; 
                    @endphp
                    <tr class="h-20">
                        <td class="py-2 px-4 border-b">{{$event->title}}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="w-60 h-40 overflow-y-auto">
                                {{$event->description}}
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b">{{$event->eventType->type}}</td>
                        <td class="py-2 px-4 border-b">{{$event->room->number}}</td>
                        <td class="py-2 px-4 border-b">{{$event->date}}</td>
                        <td class="py-2 px-4 border-b">{{$event->time}}</td>
                        <td class="py-2 px-4 border-b">{{$event->duration}} Минут</td>
                        <td class="py-2 px-4 border-b">{{$event->price}}</td>
                        <td class="py-2 px-4 border-b">{{$event->eventScript->title}}</td>
                        <td class="py-2 px-4 border-b">
                            
                            @if (empty($event->user))
                                Мы
                            @else
                                {{$event->user->full_name}}
                            @endif
                        
                        </td>
                        <td class="py-2 px-4 border-b">{{$event->eventStatus->status}}</td>
                        <td class="py-2 px-4 border-b">{{$event->created_at}}</td>
                        <td class="py-2 px-4 border-b">{{$event->updated_at}}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <button class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>