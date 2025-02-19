<x-admin-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-linen">

        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все мероприятия</h1>

        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
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
                    <tr>
                        <td class="py-2 px-4 border-b">Бал</td>
                        <td class="py-2 px-4 border-b">Танцевальный вечер</td>
                        <td class="py-2 px-4 border-b">Танцы</td>
                        <td class="py-2 px-4 border-b">Зал 1</td>
                        <td class="py-2 px-4 border-b">2024-04-28</td>
                        <td class="py-2 px-4 border-b">19:00</td>
                        <td class="py-2 px-4 border-b">3 часа</td>
                        <td class="py-2 px-4 border-b">500р</td>
                        <td class="py-2 px-4 border-b">Стандарт</td>
                        <td class="py-2 px-4 border-b">Админ</td>
                        <td class="py-2 px-4 border-b">Активен</td>
                        <td class="py-2 px-4 border-b">2024-04-20</td>
                        <td class="py-2 px-4 border-b">2024-04-20</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <button class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td class="py-2 px-4 border-b">Вечеринка</td>
                        <td class="py-2 px-4 border-b">Проводы зимы</td>
                        <td class="py-2 px-4 border-b">Танцы</td>
                        <td class="py-2 px-4 border-b">Зал 2</td>
                        <td class="py-2 px-4 border-b">2024-04-29</td>
                        <td class="py-2 px-4 border-b">19:00</td>
                        <td class="py-2 px-4 border-b">4 часа</td>
                        <td class="py-2 px-4 border-b">600р</td>
                        <td class="py-2 px-4 border-b">Премиум</td>
                        <td class="py-2 px-4 border-b">Менеджер</td>
                        <td class="py-2 px-4 border-b">Завершен</td>
                        <td class="py-2 px-4 border-b">2024-05-20</td>
                        <td class="py-2 px-4 border-b">2024-05-20</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <button class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>