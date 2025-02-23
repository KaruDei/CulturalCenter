<x-admin-layout>
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
</x-admin-layout>
