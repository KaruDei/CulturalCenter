<x-admin-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-linen">

        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все пользователи</h1>

        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Имя пользователя</th>
                        <th class="py-2 px-4 border-b text-left">Почта</th>
                        <th class="py-2 px-4 border-b text-left">Пароль</th>
                        <th class="py-2 px-4 border-b text-left">Аватар</th>
                        <th class="py-2 px-4 border-b text-left">Заказы</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">Иван Иванов</td>
                        <td class="py-2 px-4 border-b">ivan@example.com</td>
                        <td class="py-2 px-4 border-b">********</td>
                        <td class="py-2 px-4 border-b">
                            <img src="" alt="Аватар Ивана" class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="py-2 px-4 border-b">5</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <button class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Петр Петров</td>
                        <td class="py-2 px-4 border-b">petr@example.com</td>
                        <td class="py-2 px-4 border-b">********</td>
                        <td class="py-2 px-4 border-b">
                            <img src="" alt="Аватар Петра" class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="py-2 px-4 border-b">12</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <button class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Мария Сидорова</td>
                        <td class="py-2 px-4 border-b">maria@example.com</td>
                        <td class="py-2 px-4 border-b">********</td>
                        <td class="py-2 px-4 border-b">
                            <img src="" alt="Аватар Марии" class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="py-2 px-4 border-b">3</td>
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