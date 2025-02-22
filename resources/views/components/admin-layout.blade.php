<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite([
        'resources\css\app.css',
        'resources\js\app.js',
        'resources\css\style.css', 
        'resources\css\contact.css', 
        'resources\css\authorization-regist.css',
        'resources\css\main-page.css',
        'resources\css\profile.css',
        'resources\css\layout.css',
        'resources\css\modalWindow.css'
        ])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="h-full">
    <div class="container-layout">
        <header class=" header"> <!-- Замените на непрозрачный цвет -->
            <div class="header-content">
                <a href="{{Route('adminPanel')}}" class="logo"> <!-- Золото при наведении -->
                    Admin Panel
                </a>
                <nav>
                    <ul class="nav-list">
                        <li><a href="{{Route('adminPanel')}}" class="nav-link">Главная</a></li>

                        <li><a href="{{Route('adminUser')}}" class="nav-link">Пользователи</a></li>

                        <li><a href="{{Route('adminEvents')}}" class="nav-link">Мероприятия</a></li>

                        <li><a href="{{Route('adminExhibitions')}}" class="nav-link">Выставки</a></li>

                        <li><a href="{{Route('adminOrders')}}" class="nav-link">Заказы</a></li>

                        <li><a href="{{Route('logout')}}" class="nav-link">Выход</a></li>
                        
                       
                        
                    </ul>
                </nav>
            </div>
        </header>
        
        <main class="flex-auto">
                {{ $slot }}
        </main>

        <footer class=" bg-old-lace text-teal-700 py-4 text-center border-t z-40 border-amber-200"> <!-- Рамка "под золото" -->
            <p>&copy; 2025. Все права защищены.</p>
        </footer>
    </div>
</body>
</html>