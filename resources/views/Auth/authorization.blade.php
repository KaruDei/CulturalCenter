<x-layout>
    <div class="container-info">
        <div class="all-info"> 
            <h1 class="auth-title">Авторизация</h1>

        <form action="{{ Route('login') }}" method="post" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Ваш почтовый адрес:</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Введите ваш email">
                @error('failAuth')
                    <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Пароль:</label>
                <input type="password" id="password" name="password" class="form-input" placeholder="Введите ваш пароль">
                @error('failAuth')
                    <p class="text-red-500 text-sm mt-3">{{$message}}</p>
                @enderror
            </div>

            <div class="remember-section">
                <div class="remember-flex">
                    <input id="remember" name="remember" type="checkbox" class="remember-checkbox">
                    <label for="remember" class="remember-label">Запомнить меня</label>
                </div>
                <div class="forgot-text">
                    <a href="#" class="forgot-text-link">Забыли пароль?</a>
                </div>
            </div>

            <div>
                <button type="submit" class="custom-button">Войти</button>
            </div>

            <div class="forgot-text">
                Еще не с нами? <a href="{{Route('registration')}}" class="forgot-text-link">Зарегистрироваться</a>
            </div>
        </form>
    </div>
</x-layout>