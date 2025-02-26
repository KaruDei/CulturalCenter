<x-admin-layout>
    <div class="p-12 mt-[140px] mb-2 bg-floral-white rounded-xl shadow-2xl border-4 border-amber-100 max-w-md mx-auto">
        <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2 text-center">Добавить выставку</h1>

        <form class="space-y-6">
            <div>
                <label class="form-label">Название</label>
                <input type="text" class="form-input"  placeholder="Введите Название выставки" required>
            </div>

            <div>
                <label class="form-label">Описание</label>
                <input type="text" class="form-input" placeholder="Введите описание выставки" required>
            </div>

            <div>
                <label class="form-label">Картинка</label>
                <input type="file" class="form-input" >
            
            </div>

            <div>
                <label class="form-label">Стартовая дата</label>
                <input type="date" class="form-input" placeholder="Введите дату начала выставки">

            </div>

            <div>
                <label class="form-label">Конечная дата</label>
                <input type="date" class="form-input" placeholder="Введите дату конца выставки">

            </div>

            <div>
                <label class="form-label">Создано</label>
                <input type="date" class="form-input" placeholder="Введите дату создания выставки">

            </div>

            <div>
                <label class="form-label">Обнавленно</label>
                <input type="date" class="form-input" placeholder="Введите дату обнавления выставки">

            </div>

            <div>
                <button type="submit" class="mt-1 bg-white transition duration-300 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded w-full hover:bg-gray-100 focus:outline-none focus:shadow-outline">Добавить</button>
            </div>
        </form>
    </div>


    <div class="flex flex-col items-center justify-start min-h-screen bg-linen mt-6 mb-12 pt-20">

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
                        <td class="py-2 px-4 border-b text-left">
                            <div class="w-60 h-40 overflow-y-auto">
                                {{$exhibition->description}}
                            </div>
                        </td>
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