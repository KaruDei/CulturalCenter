<x-layout>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="info-aboutus bg-floral-white rounded-xl shadow-2xl p-12 max-w-4xl border border-amber-100"> 
            <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2 text-center">Регистрация</h1>

            <form action="{{ Route('registration') }}" method="post" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="full_name" class="block text-gray-700 text-lg font-medium mb-2">Ваше имя:</label>
                    <input value="{{ old('full_name') }}" type="text" id="full_name" name="full_name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Имя и фамилия">
                    @error('full_name')
                        <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-700 text-lg font-medium mb-2">Ваш почтовый адрес:</label>
                    <input value="{{ old('email') }}" type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Введите ваш email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-gray-700 text-lg font-medium mb-2">Придумайте пароль:</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Придумайте надежный пароль">
                    @error('password')
                        <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-gray-700 text-lg font-medium mb-2">Повторите пароль:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Повторите пароль еще раз">
                    @error('password')
                        <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="avatar" class="block text-gray-700 text-lg font-medium mb-2">Выберите аватар:</label>
                    <input type="file" id="avatar" name="avatar" accept="image/*" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace">
                    @error('avatar')
                        <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline transition duration-300 w-full">Присоединиться</button>
                </div>

                <div class="text-center text-lg">
                    Уже есть аккаунт? <a href="{{Route('authorization')}}" class="font-medium text-amber-600 hover:text-amber-500">Войти</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
