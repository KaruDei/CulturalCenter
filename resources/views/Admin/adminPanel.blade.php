<x-admin-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-linen">

        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Панель администратора</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Пользователи -->
            <div class="bg-floral-white rounded-2xl shadow-2xl p-8 border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-teal-700 mb-2">Пользователи</h3>
                        <p class="text-3xl font-bold text-gray-800">23</p>
                    </div>
                    <div class="text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <a href="{{Route('adminUser')}}" class="text-amber-600 hover:text-amber-700 mt-4 block">Подробнее</a>
            </div>

            <!-- Мероприятия -->
            <div class="bg-floral-white rounded-2xl shadow-2xl p-8 border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-teal-700 mb-2">Мероприятия</h3>
                        <p class="text-3xl font-bold text-gray-800">23</p>
                    </div>
                    <div class="text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <a href="{{Route('adminEvents')}}" class="text-amber-600 hover:text-amber-700 mt-4 block">Подробнее</a>
            </div>

            <!-- Выставки -->
            <div class="bg-floral-white rounded-2xl shadow-2xl p-8 border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-teal-700 mb-2">Выставки</h3>
                        <p class="text-3xl font-bold text-gray-800">23</p>
                    </div>
                    <div class="text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M11.293 2.293a1 1 0 011.414 0l6.47 6.47a1 1 0 010 1.414l-6.47 6.47a1 1 0 01-1.414-1.414L16.586 10l-5.293-5.293a1 1 0 010-1.414z" />
                            <path d="M4.293 2.293a1 1 0 011.414 0L11.586 10l-5.879 5.879a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" />
                        </svg>
                    </div>
                </div>
                <a href="{{Route('adminExhibitions')}}" class="text-amber-600 hover:text-amber-700 mt-4 block">Подробнее</a>
            </div>

            <!-- Заказы -->
            <div class="bg-floral-white rounded-2xl shadow-2xl p-8 border border-amber-100 hover:shadow-xl transition duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-teal-700 mb-2">Заказы</h3>
                        <p class="text-3xl font-bold text-gray-800">23</p>
                    </div>
                    <div class="text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4z" />
                        </svg>
                    </div>
                </div>
                <a href="{{Route('adminOrders')}}" class="text-amber-600 hover:text-amber-700 mt-4 block">Подробнее</a>
            </div>
        </div>
    </div>
</x-admin-layout>