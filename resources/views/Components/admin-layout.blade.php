<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="h-full">
    <div class="flex flex-col h-full">
        <header class=" bg-white shadow-md py-6 border-b-2 border-amber-200 fixed w-full z-10"> <!-- Замените на непрозрачный цвет -->
            <div class="container mx-auto flex items-center justify-between">
                <a href="{{Route('adminPanel')}}" class="text-3xl font-bold text-teal-800 hover:text-amber-500 transition duration-300"> <!-- Золото при наведении -->
                    Admin Panel
                </a>
                <nav>
                    <ul class="flex space-x-8">
                        <li><a href="{{Route('adminPanel')}}" class="text-teal-700 hover:text-amber-500 transition duration-300">Главная</a></li>

                        <li><a href="{{Route('adminUser')}}" class="text-teal-700 hover:text-amber-500 transition duration-300">Пользователи</a></li>

                        <li><a href="{{Route('adminEvents')}}" class="text-teal-700 hover:text-amber-500 transition duration-300">Мероприятия</a></li>

                        <li><a href="{{Route('adminExhibitions')}}" class="text-teal-700 hover:text-amber-500 transition duration-300">Выставки</a></li>

                        <li><a href="{{Route('adminOrders')}}" class="text-teal-700 hover:text-amber-500 transition duration-300">Заказы</a></li>

                        <li><a href="{{Route('logout')}}" class="text-teal-700 hover:text-amber-500 transition duration-300">Выход</a></li>
                        
                       
                        
                    </ul>
                </nav>
            </div>
        </header>
        
        <main class="flex-auto">
                {{ $slot }}
        </main>

        <footer class=" bg-old-lace text-teal-700 py-4 text-center border-t border-amber-200"> <!-- Рамка "под золото" -->
            <p>&copy; 2025. Все права защищены.</p>
        </footer>
    </div>
</body>
</html>