<x-admin-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-linen mt-6 pt-20"">

        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все выставки</h1>
        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Название</th>
                        <th class="py-2 px-4 border-b text-left">Описание</th>
                        <th class="py-2 px-4 border-b text-left">Картинка</th>
                        <th class="py-2 px-4 border-b text-left">Стартовая дата</th>
                        <th class="py-2 px-4 border-b text-left">Конечная дата</th>
                        <th class="py-2 px-4 border-b text-left">Создано</th>
                        <th class="py-2 px-4 border-b text-left">Обновлено</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i = 0; 
                    @endphp
                    @foreach ($exhibitions as $exhibition)
                    @php
                        $i++; 
                    @endphp
                    <tr>
                        <td class="py-2 px-4 border-b">{{$exhibition->title}}</td>
                        <td class="py-2 px-4 border-b">{{$exhibition->description}}</td>
                        <th class="py-2 px-4 border-b">
                            <img class="py-2 px-4 border-b" src="{{$exhibition->picture}}">
                        </th>
                        <td class="py-2 px-4 border-b">{{$exhibition->start_date}}</td>
                        <td class="py-2 px-4 border-b">{{$exhibition->end_date}}</td>
                        <td class="py-2 px-4 border-b">{{$exhibition->created_at}}</td>
                        <td class="py-2 px-4 border-b">{{$exhibition->updated_at}}</td>
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