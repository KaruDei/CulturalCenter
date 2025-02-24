<x-admin-layout>
    <div class="flex flex-col items-center justify-start min-h-screen bg-linen mt-14 mb-12 pt-20">
    <pre>
        {{print_r($orders->toArray())}}
    </pre>
        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все заказы</h1>

        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Название ивента</th>
                        <th class="py-2 px-4 border-b text-left">Описание ивента</th>
                        <th class="py-2 px-4 border-b text-left">Тип ивента</th>
                        <th class="py-2 px-4 border-b text-left">Длительность</th>
                        <th class="py-2 px-4 border-b text-left">Цена</th>
                        <th class="py-2 px-4 border-b text-left">Картинка</th>
                        <th class="py-2 px-4 border-b text-left">Сценарий</th>
                        <th class="py-2 px-4 border-b text-left">Заказчик</th>
                        <th class="py-2 px-4 border-b text-left">статус</th>
                        <th class="py-2 px-4 border-b text-left">Создано</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        
                    <tr>
                        <td class="py-2 px-4 border-b text-left">{{$order->title}}</td>
                        <td class="py-2 px-4 border-b text-left">   
                            <div class="w-60 h-40 overflow-y-auto">
                                {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}} {{$order->description}}
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b text-left">{{$order->eventType->type}}</td>
                        <td class="py-2 px-4 border-b text-left">{{$order->duration}} Минут</td>
                        <td class="py-2 px-4 border-b text-left">{{$order->price}}</td>
                        <td class="py-2 px-4 border-b text-left"><img src="{{$order->picture}}" alt=""></td>
                        <td class="py-2 px-4 border-b text-left">{{$order->script}}</td>
                        <td class="py-2 px-4 border-b text-left">{{$order->user->full_name}}</td>
                        <td class="py-2 px-4 border-b text-left">{{$order->eventStatus->status}}</td>
                        <td class="py-2 px-4 border-b text-left">{{$order->created_at}}</td>
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