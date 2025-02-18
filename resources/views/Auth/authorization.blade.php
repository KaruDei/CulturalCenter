<x-layout>
    <div class="p-12 mt-10 mb-10 bg-floral-white rounded-xl shadow-2xl border border-amber-100 max-w-md mx-auto">
        <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2 text-center">Авторизация</h1>

        <form action="{{ Route('authorization') }}" method="post" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-gray-700 text-lg font-medium mb-2">Ваш почтовый адрес:</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Введите ваш email">
                @error('email')
                    <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-gray-700 text-lg font-medium mb-2">Пароль:</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Введите ваш пароль">
                @error('password')
                    <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-gray-900 text-lg">Запомнить меня</label>
                </div>
                <div class="text-lg">
                    <a href="#" class="font-medium text-amber-600 hover:text-amber-500">Забыли пароль?</a>
                </div>
            </div>

            <div>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline transition duration-300 w-full">Войти</button>
            </div>

            <div class="text-center text-lg">
                Еще не с нами? <a href="{{Route('registration')}}" class="font-medium text-amber-600 hover:text-amber-500">Зарегистрироваться</a>
            </div>
        </form>
    </div>
</x-layout>