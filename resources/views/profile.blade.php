<x-layout>

    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <form action="{{Route('admin.users')}}" method="POST" class="modalWindow-body", enctype="multipart/form-data">
            @csrf
            @method("patch")
            <p class="button-close">Закрыть</p>
            <label for="fullname">
                ФИО
            </label>
            <input type="hidden" name="user_id" id="labelID" class="input-modal" value="{{$user->id}}">
            <input type="text" name="full_name" id="inputFullname" class="input-modal" value="{{$user->full_name}}">
            <label for="email">
                почта
            </label>
            <input type="text" name="email" id="inputEmail" class="input-modal" value="{{$user->email}}">
            <label for="inputPassword">Пароль</label>
            <input type="password" name="password" id="inputPassword" class="input-modal" value="{{$user->password}}">
            <label for="picture">
                <img id="labelPicture" src="{{$user->picture}}" alt="asdasd" class="w-12 h-12 rounded-full object-cover">
            </label>
            <input type="file" name="picture" id="inputPicture" class="input-modal">
            <input type="submit" name="" id="" class="input-modal">
        </form>
    </div>

    <div class="mt-14 container-info">
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
                        <button id="button-edit-profile" class="edit-button">Редактировать профиль</button>
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

