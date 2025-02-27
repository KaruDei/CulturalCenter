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
    <link rel="stylesheet" href="{{ asset('resources/css/main-page.css') }}">
</head>
<body class="h-full bg-linen text-gray-800">
    <div class="container-layout">
        <header class="header">
            <div class="header-content">
                <a href="{{Route('home')}}" class="logo">Cultural Center</a>
                <nav>
                    <ul class="nav-list">
                        <li><a href="{{Route('home')}}" class="nav-link">Главная</a></li>
                        <li><a href="{{Route('events')}}" class="nav-link">Мероприятия</a></li>
                        <li><a href="{{Route('exhibitions')}}" class="nav-link">Выставки</a></li>
                        <li><a href="{{Route('aboutUs')}}" class="nav-link">О нас</a></li>
                        <li><a href="{{Route('contacts')}}" class="nav-link">Контакты</a></li>
    
                        @guest
                            <li><a href="{{Route('login')}}" class="nav-link">Авторизация</a></li>
                            <li><a href="{{Route('registration')}}" class="nav-link">Регистрация</a></li>
                        @endguest
    
                        @auth
                            <li><a href="{{Route('profile')}}" class="nav-link">Профиль</a></li>
                            <li><a href="{{Route('logout')}}" class="nav-link">Выход</a></li>
                        @endauth
                    </ul>

                    <div class="burger-container relative inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50" class="burger-button">
                            <path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"></path>
                        </svg>
                        
                        <ul class="burger-nav-list">
                            <li><a href="{{Route('home')}}" class="nav-link">Главная</a></li>
                            <li><a href="{{Route('events')}}" class="nav-link">Мероприятия</a></li>
                            <li><a href="{{Route('exhibitions')}}" class="nav-link">Выставки</a></li>
                            <li><a href="{{Route('aboutUs')}}" class="nav-link">О нас</a></li>
                            <li><a href="{{Route('contacts')}}" class="nav-link">Контакты</a></li>
                    
                            @guest
                                <li><a href="{{Route('login')}}" class="nav-link">Авторизация</a></li>
                                <li><a href="{{Route('registration')}}" class="nav-link">Регистрация</a></li>
                            @endguest
                    
                            @auth
                                <li><a href="{{Route('profile')}}" class="nav-link">Профиль</a></li>
                                <li><a href="{{Route('logout')}}" class="nav-link">Выход</a></li>
                            @endauth
                        </ul> 
                    </div>
                    
                </nav>
            </div>
        </header>
        
        <main class="main-content">
            {{ $slot }}
        </main>
    
        <footer class="footer">
            <p>&copy; 2025. Все права защищены.</p>
        </footer>
    </div>
</body>
</html>