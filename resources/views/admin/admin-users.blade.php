<x-admin-layout>

    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <div class="modalWindow-body" >
            <p class="button-close">Закрыть</p>
            <div class="container-info">
                <div class="all-info"> 
                    <h1 class="auth-title">Регистрация</h1>
        
                    <form action="{{ Route('registration') }}" method="post" class="contact-form" enctype="multipart/form-data">
                        @csrf
        
                        <div class="form-group">
                            <label for="full_name" class="form-label">Ваше имя:</label>
                            <input value="{{ old('full_name') }}" type="text" id="full_name" name="full_name" class="form-input" placeholder="Имя и фамилия">
                            @error('full_name')
                                <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="email" class="form-label">Ваш почтовый адрес:</label>
                            <input value="{{ old('email') }}" type="email" id="email" name="email" class="form-input" placeholder="Введите ваш email">
                            @error('email')
                                <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="password" class="form-label">Придумайте пароль:</label>
                            <input type="password" id="password" name="password" class="form-input" placeholder="Придумайте надежный пароль">
                            @error('password')
                                <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Повторите пароль:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" placeholder="Повторите пароль еще раз">
                            @error('password')
                                <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="picture" class="form-label">Выберите аватар:</label>
                            <input type="file" id="picture" name="picture" accept="image/*" class="form-input">
                            @error('picture')
                                <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div>
                            <button type="submit" class="custom-button">Присоединиться</button>
                        </div>
        
                        <div class="forgot-text ml-[76px]">
                            Уже есть аккаунт? <a href="{{Route('login')}}" class="forgot-text-link">Войти</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                                <button id="buttonUpdate"class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Модальное окно</button>
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