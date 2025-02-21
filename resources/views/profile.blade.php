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
                <div class="user-info">
                    <h2 class="user-title">Информация о вас</h2>
                    <div class="user-details">
                        <p class="user-detail">
                            <span class="detail-label">Имя:</span> {{$user->full_name}}
                        </p>
                        <p class="user-detail">
                            <span class="detail-label">Email:</span> {{$user->email}}
                        </p>
                        <button class="edit-button">Редактировать профиль</button>
                    </div>
                </div>
            </section>
            
            <section class="visit-history">
                <h2 class="user-title">История ваших посещений</h2>
                <ul class="visit-list">
                    <li>
                        <a href="#" class="visit-button">Заказ #12345 - 15.03.2024</a>
                    </li>
                    <li>
                        <a href="#" class="visit-button">Заказ #67890 - 28.02.2024</a>
                    </li>
                </ul>
            </section>
            
            <section class="visit-history">
                <h2 class="user-title">Предстоящие мероприятия</h2>
                <ul class="visit-list">
                    <li>
                        <button class="visit-button">Премьера балета "Лебединое озеро" - 22.04.2024 (Статус: Подтвержден)</button>
                    </li>
                    <li>
                        <button class="visit-button">Выставка "Импрессионизм" - 10.05.2024 (Статус: Ожидает оплаты)</button>
                    </li>
                </ul>
            </section>
            
        </div>
    </div>
</x-layout>

