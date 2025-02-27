<x-layout>

    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <form action="{{Route('profile')}}" method="POST" class="modalWindow-body" enctype="multipart/form-data">
            @csrf
            @method("patch")
            <p class="button-close">Закрыть</p>
            
            <label for="fullname" class="form-label">ФИО</label>
            <input type="hidden" name="user_id" id="labelID" class="input-modal" value="{{$user->id}}">
            <input type="text" name="full_name" id="inputFullname" class="form-input" placeholder="Введите ФИО" value="{{$user->full_name}}" required>
            
            <label for="email" class="form-label">Почта</label>
            <input type="email" name="email" id="inputEmail" class="form-input" placeholder="Введите почту" value="{{$user->email}}" required>
            
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" id="inputPassword" class="form-input" placeholder="Введите пароль" required>
            
            <label for="picture" class="form-label">
                <img id="labelPicture" src="{{$user->picture}}" alt="asdasd" class="w-12 h-12 rounded-full object-cover">
                Загрузить изображение
            </label>
            <input type="file" name="picture" id="inputPicture" class="form-input">
            
            <input type="submit" value="Сохранить" class="submit-button">
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
        @session('error')
            <p class="mb-5 text-red-700 text-xl">{{$value}}</p>
        @endsession

        @session('success')
            <p class="mb-5 text-red-700 text-xl">{{$value}}</p>
        @endsession

        @error('user_id')
            <p class="mb-5 text-red-700 text-xl">{{$message}}</p>
        @enderror

        @error('email')
            <p class="mb-5 text-red-700 text-xl">{{$message}}</p>
        @enderror

        @error('password')
            <p class="mb-5 text-red-700 text-xl">{{$message}}</p>
        @enderror

        @error('picture')
            <p class="mb-5 text-red-700 text-xl">{{$message}}</p>
        @enderror

        @error('full_name')
            <p class="mb-5 text-red-700 text-xl">{{$message}}</p>
        @enderror
                    </div>
                </div>
            </section>
            
            
            <section class="visit-history">
                <h2 class="user-title">Предстоящие мероприятия</h2>
                <ul class="visit-list">
                   @foreach ($user->userTickets as $ticket)
                        <li class="border-b-2 border-b-amber-200">
                            Мероприятие - {{$ticket->event->title}} </br>
                            Дата и время - {{$ticket->event->date}},  {{$ticket->event->time}}, </br>
                            Ряд - {{$ticket->seat->row}}</br>
                            Место - {{$ticket->seat->number}}

                        </li>
                   @endforeach
                </ul>
            </section>
            
        </div>
    </div>
</x-layout>

