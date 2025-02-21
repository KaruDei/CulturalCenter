<x-layout>
    <div class="container-info">
        <div class="all-info">
            <h1 class="auth-title">Ваш личный кабинет</h1>

            <section class="user-profile">
                <!-- Аватар -->
                <div class="avatar">
                    <img src="{{$user->picture}}" alt="Аватар пользователя" class="avatar-image">
                </div>

                <!-- Информация о пользователе -->
                <div>
                    <h2 class="text-3xl font-semibold text-teal-700 mb-4">Информация о вас</h2>
                    <div class="space-y-2">
                        <p class="text-gray-700">
                            <span class="font-semibold">Имя:</span> {{$user->full_name}}
                        </p>
                        <p class="text-gray-700">
                            <span class="font-semibold">Email:</span> {{$user->email}}
                        </p>
                        <button class="text-teal-700 shadow-2xl border-[2px] rounded-xl border-amber-300 w-[200px] h-[50px] flex items-center justify-center cursor-pointer hover:border-amber-200 hover:text-teal-400 transition-colors duration-300">
                            Редактировать профиль
                        </button>
                    </div>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-3xl font-semibold text-teal-700 mb-4">История ваших посещений</h2>
                <ul class="list-none pl-5">
                    <li>
                        <button class="text-amber-600 hover:text-amber-700 before:content-['\2192'] before:mr-2 hover:underline">Заказ #12345 - 15.03.2024</button>
                    </li>
                    <li>
                        <button class="text-amber-600 hover:text-amber-700 before:content-['\2192'] before:mr-2 hover:underline">Заказ #67890 - 28.02.2024</button>
                    </li>
                </ul>
            </section>

            <section>
                <h2 class="text-3xl font-semibold text-teal-700 mb-4">Предстоящие мероприятия</h2>
                <ul class="list-none pl-5">
                    <li>
                        <button class="text-amber-600 hover:text-amber-700 before:content-['\2192'] before:mr-2 hover:underline">Премьера балета "Лебединое озеро" - 22.04.2024 (Статус: Подтвержден)</button>
                    </li>
                    <li>
                        <button class="text-amber-600 hover:text-amber-700 before:content-['\2192'] before:mr-2 hover:underline">Выставка "Импрессионизм" - 10.05.2024 (Статус: Ожидает оплаты)</button>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</x-layout>

