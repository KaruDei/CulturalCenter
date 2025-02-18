<x-layout>
    <div class="p-12 mt-10 mb-10 bg-floral-white rounded-xl shadow-2xl border border-amber-100 max-w-md mx-auto">
        <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2 text-center">Регистрация</h1>

        <form class="space-y-6">
            <div>
                <label for="name" class="block text-gray-700 text-lg font-medium mb-2">Ваше имя:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Имя и фамилия">
            </div>
            <div>
                <label for="email" class="block text-gray-700 text-lg font-medium mb-2">Ваш почтовый адрес:</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Введите ваш email">
            </div>
            <div>
                <label for="password" class="block text-gray-700 text-lg font-medium mb-2">Придумайте пароль:</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Придумайте надежный пароль">
            </div>
            <div>
                <label for="password_confirmation" class="block text-gray-700 text-lg font-medium mb-2">Повторите пароль:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Повторите пароль еще раз">
            </div>

            <div>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline transition duration-300 w-full">Присоединиться</button>
            </div>

            <div class="text-center text-lg">
                Уже есть аккаунт? <a href="{{Route('authorization')}}" class="font-medium text-amber-600 hover:text-amber-500">Войти</a>
            </div>
        </form>
    </div>
</x-layout>