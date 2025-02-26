<x-admin-layout>
    
    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <form action="{{Route('admin.users')}}" method="POST" class="modalWindow-body" enctype="multipart/form-data">
            @csrf
            @method("patch")
            <p class="button-close">Закрыть</p>
            
            <label for="fullname" class="form-label">ФИО</label>
            <input type="hidden" name="user_id" id="labelID" class="input-modal">
            <input type="text" name="full_name" id="inputFullname" class="form-input" placeholder="Введите ФИО" required>
            
            <label for="email" class="form-label">Почта</label>
            <input type="email" name="email" id="inputEmail" class="form-input" placeholder="Введите почту" required>
            
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" id="inputPassword" class="form-input" placeholder="Введите пароль" required>
            
            <label for="picture" class="form-label">
                <img id="labelPicture" src="" alt="Изображение профиля" class="profile-image">
                Загрузить изображение
            </label>
            <input type="file" name="picture" id="inputPicture" class="form-input">
            
            <input type="submit" value="Сохранить" class="submit-button">
        </form>
        
        
    </div>

    <div class="flex flex-col items-center justify-center min-h-screen bg-linen">

        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все пользователи</h1>

        @session('error')
            {{$value}}
        @endsession

        @session('success')
            {{$value}}
        @endsession

        @error('user_id')
            <p>{{$message}}</p>
        @enderror

        @error('email')
            <p>{{$message}}</p>
        @enderror

        @error('password')
            <p>{{$message}}</p>
        @enderror

        @error('picture')
            <p>{{$message}}</p>
        @enderror

        @error('full_name')
            <p>{{$message}}</p>
        @enderror

        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">ID</th>
                        <th class="py-2 px-4 border-b text-left">Имя пользователя</th>
                        <th class="py-2 px-4 border-b text-left">Почта</th>
                        <th class="py-2 px-4 border-b text-left">Аватар</th>
                        <th class="py-2 px-4 border-b text-left">Заказы</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i = 0; 
                    @endphp
                    @foreach ($users as $user)
                    @php
                        $i++; 
                    @endphp
                        <tr id="wrap-{{$i}}">
                            <td class="py-2 px-4 border-b">{{$user->id}}</td>
                            <td class="py-2 px-4 border-b">{{$user->full_name}}</td>
                            <td class="py-2 px-4 border-b">{{$user->email}}</td>
                            <td class="py-2 px-4 border-b">
                                <img src="{{$user->picture}}" alt="Аватар {{$user->full_name}}" class="w-12 h-12 rounded-full object-cover">
                            </td>
                            <td class="py-2 px-4 border-b">{{$user->userOrders->count()}}</td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex space-x-2">
                                    <button id="button-edit-{{$i}}" class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                    <form action="{{Route('admin.users')}}", method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <button type="submit" id="button-delete-{{$i}}" class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>

</x-admin-layout>

